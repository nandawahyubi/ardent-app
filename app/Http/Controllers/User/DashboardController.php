<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Package')->whereUserId(Auth::id())->latest()->get();
        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }

    public function invoice(Checkout $checkout)
    {
        return view('user.invoice', [
            'checkout' => $checkout
        ]);
    }
}
