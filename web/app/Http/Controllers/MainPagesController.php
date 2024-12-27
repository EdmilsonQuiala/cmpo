<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Preference;

class MainPagesController extends Controller
{
    public function home()
    {
        $user = Auth::user(); // Obtém o usuário autenticado
        $preference = Preference::where('user_id', $user->id)->first(); // Busca as preferências do usuário
        $balance = $user->balance; // Obtém o saldo do usuário

        // Retorna a view com os dados do usuário, preferências e balance
        return view('frontend.home.main', compact('user', 'preference', 'balance'));
    }
    public function logout()
    {
        // Realiza o logout do usuário
        Auth::logout();

        // Redireciona para a página de login com uma mensagem de sucesso
        return redirect()->route('login')->with('status', 'Você saiu com sucesso!');
    }
}

