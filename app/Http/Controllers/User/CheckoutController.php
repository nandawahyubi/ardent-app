<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\Checkout\Store;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout\AfterCheckout;
// use Exception;
use Illuminate\Support\Str;
use Midtrans;
use RealRashid\SweetAlert\Facades\Alert;

class CheckoutController extends Controller
{
    public function __construct()
    {
        Midtrans\Config::$serverKey     = "SB-Mid-server-3ubyn7loJ531nEA_3OdVzFhQ";
        Midtrans\Config::$isProduction  = false;
        Midtrans\Config::$isSanitized   = false;
        Midtrans\Config::$is3ds         = false;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Package $package)
    {
        if($package->isOrder){
            $request->session()->flash('error', "You can only booking once until your booking is finished.");
            return redirect(route('user.dashboard'));
        }
        return view('checkout.create', [
            'package' => $package
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request, Package $package, Checkout $checkout)
    {
        $data     = $request->all();
        $schedule = Checkout::where('order_schedule', $data['order_schedule'])->count();

        if ($schedule == 2) {
            Alert::error('Error', 'Maaf, Jadwal di Tanggal Ini Sudah Penuh!');
            return back()->withInput()->with('error', "Maaf, Jadwal di Tanggal Ini Sudah Penuh!");

        } elseif ($schedule < 2) {
            $data['user_id'] = Auth::id();
            $data['package_id'] = $package->id;
    
            // update user data
            $user = Auth::user();
            $user->name    = $data['name'];
            $user->email   = $data['email'];
            $user->no_telp = $data['no_telp'];
            $user->address = $data['address'];
            $user->save();
    
            // create checkout
            $checkout = Checkout::create($data);
            $this->getSnapRedirect($checkout);
            // send email
            Mail::to(Auth::user()->email)->send(new AfterCheckout($checkout));
            
            Alert::success('Success', 'Selamat, Pesanan Anda Berhasil di Lakukan');
            return redirect(route('checkout.success'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        Checkout::destroy($checkout->id);

        Alert::success('Success', "This Order Has Been Successfully Canceled");
        return back()->with('success', "This Order Has Been Successfully Canceled");
    }

    public function success()
    {
        $checkout = Checkout::with('Package')->whereUserId(Auth::id())->get();
        return view('checkout.success', [
            'checkouts' => $checkout
        ]);
    }

    /**
     * Midtrans Handler
     */
    public function getSnapRedirect(Checkout $checkout){
        $orderId = $checkout->id.'-'.Str::random(5);
        $price = $checkout->Package->price * 1000;
        $checkout->midtrans_booking_code = $orderId;

        $transaction_details = [
            'order_id'      => $orderId,
            'gross_amount'  => $price
        ];

        $item_details = [
            'id'        => $orderId,
            'price'     => $price,
            'quantity'  => '1',
            'name'      => "Payment for {$checkout->Package->title} Package"
        ];

        $userData = [
            "first_name"    => $checkout->User->name,
            "last_name"     => "",
            "address"       => $checkout->User->address,
            "phone"         => $checkout->User->no_telp,
            "city"          => "",
            "postal_code"   => "",
            "country_code"  => "IDN"
        ];

        $customer_details = [
            "first_name"        => $checkout->User->name,
            "last_name"         => "",
            "email"             => $checkout->User->email,
            "phone"             => $checkout->User->no_telp,
            "billing_address"   => $userData,
            "shipping_address"  => $userData
        ];

        $midtrans_params = [
            'transaction_details'   => $transaction_details,
            'customer_details'      => $customer_details,
            'items_details'         => $item_details
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = \Midtrans\Snap::createTransaction($midtrans_params)->redirect_url;
            $checkout->midtrans_url = $paymentUrl;
            $checkout->save();

            return $paymentUrl;
        } catch (Exception $e) {
            return false;
        }
    }

    public function midtransCallback(Request $request)
    {
        $notif = $request->method() == 'POST' ? new Midtrans\Notification() : Midtrans\Transaction::status($request->order_id);

        $transaction_status = $notif->transaction_status;
        $fraud = $notif->fraud_status;

        $checkout_id = explode('-', $notif->order_id)[0];
        $checkout = Checkout::find($checkout_id);

        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
            // TODO Set payment status in merchant's database to 'challenge'
            $checkout->payment_status = 'pending';
            }
            else if ($fraud == 'accept') {
            // TODO Set payment status in merchant's database to 'success'
            $checkout->payment_status = 'paid';
            }
        }
        else if ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
            // TODO Set payment status in merchant's database to 'failure'
            $checkout->payment_status = 'failed';
            }
            else if ($fraud == 'accept') {
            // TODO Set payment status in merchant's database to 'failure'
            $checkout->payment_status = 'failed';
            }
        }
        else if ($transaction_status == 'deny') {
            // TODO Set payment status in merchant's database to 'failure'
            $checkout->payment_status = 'failed';
        }
        else if ($transaction_status == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $checkout->payment_status = 'paid';
        }
        else if ($transaction_status == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $checkout->payment_status = 'pending';
        }
        else if ($transaction_status == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $checkout->payment_status = 'failed';
        }

        $checkout->save();
        
        $checkout = Checkout::with('Package')->whereUserId(Auth::id())->get();
        return view('checkout.success', [
            'checkouts' => $checkout
        ]);
    }
}
