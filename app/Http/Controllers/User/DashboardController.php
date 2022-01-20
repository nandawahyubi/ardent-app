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
        $checkouts = Checkout::with('Package')->whereUserId(Auth::id())->get();
        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }

    public function invoice()
    {
        $checkouts = Checkout::with('Package')->whereUserId(Auth::id())->get();
        return view('user.invoice', [
            'checkouts' => $checkouts
        ]);
    }
}
