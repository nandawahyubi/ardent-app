<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Socialite Route
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

// Midtrans Route
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);

Route::middleware(['auth'])->group(function () {
    // checkout routes
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{package:slug}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');
    Route::post('checkout/{package}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');
    
    // dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // user dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function () {
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');

        Route::get('invoice/{checkout:midtrans_boooking_code}', [UserDashboard::class, 'invoice'])->name('get.invoice');
    });

    // admin dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function () {
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');

        Route::post('checkout/{checkout}', [AdminCheckout::class, 'change'])->name('checkout.change');
        Route::delete('checkout/{checkout}', [AdminCheckout::class, 'destroy'])->name('checkout.delete');
        Route::get('checkout/{checkout}', [AdminCheckout::class, 'edit'])->name('checkout.edit');
        Route::put('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');
    });
});

require __DIR__.'/auth.php';
