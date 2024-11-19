<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\SecurityPagesController;

Route::get('/wellcome', [SecurityPagesController::class, 'wellcome'])->name('wellcome')->middleware('guest');
Route::get('/access-account', [SecurityPagesController::class, 'AccessAccount'])->name('AccessAccount')->middleware('guest');
Route::get('/register', [SecurityPagesController::class, 'register'])->name('register')->middleware('guest');
Route::get('/login', [SecurityPagesController::class, 'login'])->name('login')->middleware('guest');

Route::get('/', [MainPagesController::class, 'home'])->name('home')->middleware('guest');
Route::get('/home', [MainPagesController::class, 'home'])->name('home')->middleware('guest');
