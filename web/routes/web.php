<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\accessController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\cardsController;


// Rotas de Registo
Route::get('/register', [accessController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [accessController::class, 'registerUser'])->name('registerUser')->middleware('guest');

// Rotas de Autenticação
Route::get('/login', [AccessController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AccessController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/logout', [AccessController::class, 'logout'])->name('logout')->middleware('auth');

// Recuperação de Senha
Route::get('/recover-password', [AccessController::class, 'recoverPassword'])->name('recoverPassword')->middleware('guest');
Route::post('/recover-password', [AccessController::class, 'sendResetLink'])->name('sendResetLink')->middleware('guest');
Route::get('/new-password/{token}', [AccessController::class, 'newPassword'])->name('newPassword')->middleware('guest');
Route::post('/new-password', [AccessController::class, 'resetPassword'])->name('resetPassword')->middleware('guest');

// Verificação de E-mail
Route::get('/email/verify', [AccessController::class, 'showVerificationNotice'])->name('verification.notice')->middleware('auth');
Route::get('/email/verify/{id}/{hash}', [AccessController::class, 'verifyEmail'])->name('verification.verify')->middleware('auth');
Route::post('/email/resend', [AccessController::class, 'resendVerificationEmail'])->name('verification.resend')->middleware('auth');

// Paginas Principais
Route::get('/', [homeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/about', [homeController::class, 'about'])->name('about')->middleware('auth');

// Produtos
Route::get('/all-products', [productController::class, 'allProducts'])->name('allProducts')->middleware('auth');
Route::get('/product-details', [productController::class, 'porductDetails'])->name('porductDetails')->middleware('auth');
Route::get('/checkout', [productController::class, 'checkout'])->name('checkout')->middleware('auth');

// Perfil
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');

//cards
Route::get('/cards', [cardsController::class, 'cards'])->name('cards')->middleware('auth');
