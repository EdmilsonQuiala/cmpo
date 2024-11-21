<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\SecurityPagesController;


Route::middleware(['guest'])->group(function () {
    Route::get('/wellcome', [SecurityPagesController::class, 'wellcome'])->name('wellcome');
    Route::match(['get', 'post'], '/access-account', [SecurityPagesController::class, 'AccessAccount'])->name('AccessAccount');
    Route::post('/sign-up', [SecurityPagesController::class, 'signUp'])->name('signUp');
    Route::get('/sign-in', [SecurityPagesController::class, 'signIn'])->name('signIn');
});

Route::get('/', [MainPagesController::class, 'home'])->name('home')->middleware('guest');
Route::get('/home', [MainPagesController::class, 'home'])->name('home')->middleware('guest');


