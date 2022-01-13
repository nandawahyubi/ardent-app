<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout\Progress;
use App\Mail\Checkout\Finished;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        if ($checkout->status == 0) {
            $checkout->status = 1;
            $checkout->save();

            // send email to user
            Mail::to($checkout->User->email)->send(new Progress($checkout));

            $request->session()->flash('success', "Checkout with ID {$checkout->id} has been updated to on progress!");
            return redirect(route('admin.dashboard'));
        } elseif ($checkout->status == 1) {
            $checkout->status = 2;
            $checkout->save();

            // send email to user
            Mail::to($checkout->User->email)->send(new Finished($checkout));

            $request->session()->flash('success', "Checkout with ID {$checkout->id} has been updated to finished!");
            return redirect(route('admin.dashboard'));
        }
    }
}
