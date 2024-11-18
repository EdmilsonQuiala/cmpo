<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPagesController;


// Rotas de Registo
Route::get('/', [MainPagesController::class, 'home'])->name('home')->middleware('guest');
Route::get('/home', [MainPagesController::class, 'home'])->name('home')->middleware('guest');
