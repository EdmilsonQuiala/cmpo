<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\SecurityPagesController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\LandingController;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LandingController::class, 'home'])->name('home');
    Route::get('/landing', [LandingController::class, 'home'])->name('home');
});
// Acces Controller
Route::middleware(['guest'])->group(function () {
    Route::get('/wellcome', [SecurityPagesController::class, 'wellcome'])->name('wellcome');
    Route::match(['get', 'post'], '/access-account', [SecurityPagesController::class, 'AccessAccount'])->name('AccessAccount');
    Route::match(['get', 'post'], '/access-account', [SecurityPagesController::class, 'AccessAccount'])->name('login');
    Route::post('/sign-up', [SecurityPagesController::class, 'signUp'])->name('signUp');
    Route::post('/sign-in', [SecurityPagesController::class, 'signIn'])->name('signIn');
});

// Main Page Controller
Route::middleware(['auth'])->group(function () {
    Route::get('/app', [MainPagesController::class, 'home'])->name('home');
});

// Preferences
Route::middleware(['auth'])->group(function () {
    Route::post('/toggle-hide-money', [PreferenceController::class, 'toggleHideMoney'])->name('toggleHideMoney');
});

// Wallet Controller
Route::middleware(['auth'])->group(function () {
    Route::get('/wallet', [WalletController::class, 'wallet'])->name('wallet');
    Route::get('/wallet/add-money', [WalletController::class, 'AddMoney'])->name('AddMoney');
    Route::post('/wallet/add-money-process', [WalletController::class, 'AddMoneyProcess'])->name('AddMoneyProcess');
});







