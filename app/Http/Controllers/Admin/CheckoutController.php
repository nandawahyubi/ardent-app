<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout\Progress;
use App\Mail\Checkout\Finished;
use App\Http\Requests\Admin\Checkout\Update;
use App\Models\User;
use Alert;

class CheckoutController extends Controller
{
    public function change(Request $request, Checkout $checkout)
    {
        if ($checkout->status == 0) {
            $checkout->status = 1;
            $checkout->save();

            // send email to user
            Mail::to($checkout->User->email)->send(new Progress($checkout));

            Alert::success('Success', "Checkout with ID {$checkout->id} has been changed to on progress!");
            return redirect(route('admin.dashboard'))->with('success', "Checkout with ID {$checkout->id} has been changed to on progress!");
        } elseif ($checkout->status == 1) {
            $checkout->status = 2;
            $checkout->save();

            // send email to user
            Mail::to($checkout->User->email)->send(new Finished($checkout));

            Alert::success('Success', "Checkout with ID {$checkout->id} has been changed to finished!");
            return redirect(route('admin.dashboard'))->with('success', "Checkout with ID {$checkout->id} has been changed to finished!");
        }
    }

    public function edit(Checkout $checkout)
    {
        return view('checkout.edit', [
            'checkout' => $checkout
        ]);
    }

    public function update(Update $request, Checkout $checkout)
    {
        $data          = $request->all();
        $checkSchedule = Checkout::where('order_schedule', $data['order_schedule'])->count();
        
        if ($checkSchedule == 2) {
            Alert::error('Error', 'Maaf, Jadwal di Tanggal Ini Sudah Penuh!');
            return redirect()->route('admin.checkout.edit', $checkout->id)->with('error', "Maaf, Jadwal di Tanggal Ini Sudah Penuh!");

        } elseif ($checkSchedule < 2) {
            $dataUser     = User::where('id', $checkout->user_id)->first();
            $dataCheckout = Checkout::where('id', $checkout->id)->first();
    
            $dataUser->name             = $data['name'];
            $dataUser->email            = $data['email'];
            $dataUser->no_telp          = $data['no_telp'];
            $dataUser->address          = $data['address'];
            $dataUser->save();
    
            $dataCheckout->vehicle_brand    = $data['vehicle_brand'];
            $dataCheckout->vehicle_color    = $data['vehicle_color'];
            $dataCheckout->production_year  = $data['production_year'];
            $dataCheckout->number_plate     = $data['number_plate'];
            $dataCheckout->order_schedule   = $data['order_schedule'];
            $dataCheckout->save();
    
            Alert::success('Success', "Checkout with ID {$checkout->id} has been updated!");
            return redirect(route('admin.dashboard'))->with('success', "Checkout with ID {$checkout->id} has been updated!");
        }
    }

    public function destroy(Checkout $checkout)
    {
        // 1nd step
        Checkout::destroy($checkout->id);

        // 2nd step
        // $data = Checkout::findorfail($checkout->id);
        // $data->delete();
        
        Alert::success('Success', "Checkout with ID {$checkout->id} has been deleted!");
        return back()->with('success', "Checkout with ID {$checkout->id} has been deleted!");
    }
}
