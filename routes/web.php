<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('customer.home');
});


Route::get('home', [HomeController::class, 'showHome'])->name('customer.home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
    Route::get('register', [AuthController::class, 'showRegister'])->name('admin.register');
    Route::post('register', [AuthController::class, 'register'])->name('admin.register');

    Route::middleware(['auth'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});
