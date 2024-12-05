<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\SecurityPagesController;
use App\Http\Controllers\SocialAuthController;


Route::middleware(['guest'])->group(function () {
    Route::get('/wellcome', [SecurityPagesController::class, 'wellcome'])->name('wellcome');
    Route::match(['get', 'post'], '/access-account', [SecurityPagesController::class, 'AccessAccount'])->name('AccessAccount');
    Route::match(['get', 'post'], '/access-account', [SecurityPagesController::class, 'AccessAccount'])->name('login');
    Route::post('/sign-up', [SecurityPagesController::class, 'signUp'])->name('signUp');
    Route::post('/sign-in', [SecurityPagesController::class, 'signIn'])->name('signIn');
});

Route::get('/', [MainPagesController::class, 'home'])->name('home')->middleware('auth');
Route::get('/home', [MainPagesController::class, 'home'])->name('home')->middleware('auth');


