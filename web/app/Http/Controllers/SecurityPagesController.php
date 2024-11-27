<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SecurityPagesController
{
    public function wellcome()
    {
        return view('frontend.security.pages.wellcome');
    }
    public function AccessAccount()
    {
        $tab = 'tab-sign-in';

        return view('frontend.security.main', compact('tab'));
    }
    public function signUp(Request $request)
    {
        // Validação dos campos
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // Confirmed exige password_confirmation
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Criação do usuário
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->notify(new WelcomeNotification());

        return response()->json([
            'status' => 'success',
            'message' => 'Usuário Registado, Acesse sua conta!',
        ]);
    }

    public function signIn(Request $request)
    {
        // Validação dos campos
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentativa de autenticação
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([
                'status' => 'success',
                'message' => 'Login efetuado com sucesso!',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'errors' => ['login' => ['Credenciais inválidas.']],
        ], 422);
    }

}
