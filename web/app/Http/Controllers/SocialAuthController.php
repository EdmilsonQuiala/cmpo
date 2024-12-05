<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    // Redirecionar para Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback do Google
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $this->loginOrRegisterUser($user, 'google_id');
        return redirect()->route('home');
    }

    // Redirecionar para Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Callback do Facebook
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $this->loginOrRegisterUser($user, 'facebook_id');
        return redirect()->route('home');
    }

    // Método para Login ou Registro
    protected function loginOrRegisterUser($socialUser, $provider)
    {
        $user = User::firstOrCreate(
            [$provider => $socialUser->id],
            [
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => bcrypt(uniqid()), // Senha aleatória
            ]
        );

        Auth::login($user);
    }
}

