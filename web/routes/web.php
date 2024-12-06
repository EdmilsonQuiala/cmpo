<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\SecurityPagesController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\PreferenceController;

Route::middleware(['guest'])->group(function () {
    Route::get('/wellcome', [SecurityPagesController::class, 'wellcome'])->name('wellcome');
    Route::match(['get', 'post'], '/access-account', [SecurityPagesController::class, 'AccessAccount'])->name('AccessAccount');
    Route::match(['get', 'post'], '/access-account', [SecurityPagesController::class, 'AccessAccount'])->name('login');
    Route::post('/sign-up', [SecurityPagesController::class, 'signUp'])->name('signUp');
    Route::post('/sign-in', [SecurityPagesController::class, 'signIn'])->name('signIn');
});

Route::get('/', [MainPagesController::class, 'home'])->name('home')->middleware('auth');
Route::get('/home', [MainPagesController::class, 'home'])->name('home')->middleware('auth');

//Preferences
Route::middleware(['auth'])->group(function () {
    Route::post('/toggle-hide-money', [PreferenceController::class, 'toggleHideMoney'])->name('toggleHideMoney');
});




