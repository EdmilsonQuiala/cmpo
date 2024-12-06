<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Preference;

class MainPagesController
{
    public function home()
    {
        $user = Auth::user(); // Obtem o usuário autenticado
        $preference = Preference::where('user_id', $user->id)->first(); // Busca as preferências do usuário

        // Retorna a view com os dados do usuário e preferências
        return view('frontend.home.main', compact('user', 'preference'));
    }
}

