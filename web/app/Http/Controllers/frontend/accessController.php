<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class accessController extends Controller
{
    public function register()
    {
        return view('frontend.access.register');
    }

    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'nullable|image|max:1024',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $user->image = basename($path);
        }

        $user->save();

        // Enviar email de confirmação
        Mail::to($user->email)->send(new \App\Mail\UserRegistered($user));

        return view('frontend.access.login')->with('success', 'Registo efetuado com sucesso.');
    }
    // Tela de Login
    public function login()
    {
        return view('frontend.access.login');
    }

    // Autenticação do Utilizador
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (!Auth::user()->hasVerifiedEmail()) {
                return view('frontend.home.home')->with('info', 'Seu e-mail não esta verificado.');
            }
            return redirect()->intended('/home')->with('success', 'Login efetuado com sucesso.');
        }

        return back()->with('error', 'Credenciais inválidas.');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('info', 'Sessão terminada com sucesso.');
    }

    // Tela de Recuperação de Senha
    public function recoverPassword()
    {
        return view('frontend.access.recover-password');
    }

    // Enviar Link para Redefinir Senha
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Link para redefinição de senha enviado para o seu e-mail.')
            : back()->with('error', 'Não foi possível enviar o link. Verifique o e-mail e tente novamente.');
    }

    // Tela de Redefinição de Senha
    public function newPassword($token)
    {
        return view('frontend.access.new-password', ['token' => $token]);
    }

    // Redefinir Senha
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'token' => 'required'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('success', 'Senha redefinida com sucesso.')
            : back()->with('error', 'Falha ao redefinir a senha. Tente novamente.');
    }

    // Notificação de Verificação de E-mail
    public function showVerificationNotice()
    {
        return view('frontend.access.verify-email');
    }

    // Verificar E-mail
    public function verifyEmail(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended('/home')->with('success', 'E-mail já verificado.');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended('/home')->with('success', 'E-mail verificado com sucesso.');
    }

    // Reenviar E-mail de Verificação
    public function resendVerificationEmail(Request $request)
    {

        if ($request->user()->hasVerifiedEmail()) {
            return view('frontend.home.home')->with('info', 'Seu e-mail não esta verificado.');
        }

        /* $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Link para redefinição de senha enviado para o seu e-mail.')
            : back()->with('error', 'Não foi possível enviar o link. Verifique o e-mail e tente novamente.'); */
    }
}

