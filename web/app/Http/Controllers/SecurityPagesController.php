<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Validator;

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
        if ($request->isMethod('get')) {

            $tab = 'tab-sign-up';
            return view('frontend.security.main', compact('tab'));
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create($request->all());

        // Enviar notificação de boas-vindas
        $user->notify(new WelcomeNotification());

        return response()->json([
            'status' => 'success',
            'message' => 'Conta criada com sucesso!',
        ], 200);
    }

    public function signIn()
    {
        $tab = 'tab-sign-in';
        return view('frontend.home.main', compact('tab'));
    }
}
