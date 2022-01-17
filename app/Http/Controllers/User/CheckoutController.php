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
use Exception;
use Illuminate\Support\Str;
use Midtrans;

class CheckoutController extends Controller
{
    public function __construct()
    {
        Midtrans\Config::$serverKey     = env('MIDTRANS_SERVERKEY');
        Midtrans\Config::$isProduction  = env('MIDTRANS_IS_PRODUCTION');
        Midtrans\Config::$isSanitized   = env('MIDTRANS_IS_SANITIZED');
        Midtrans\Config::$is3ds         = env('MIDTRANS_IS_3DS');
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
        return view('checkout\create', [
            'package' => $package
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request, Package $package)
    {
        $data = $request->all();
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

        return redirect(route('checkout.success'));
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
        //
    }

    public function success()
    {
        return view('checkout\success');
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
}
