<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class WalletController extends Controller
{
    public function AddMoney() {

        $user = Auth::user(); // Obtém o usuário autenticado
        $preference = Preference::where('user_id', $user->id)->first(); // Busca as preferências do usuário
        $balance = $user->balance; // Obtém o saldo do usuário
        $CurrentPage = 'AddMoney';

        return view('frontend.wallet.main', compact('CurrentPage', 'user', 'preference', 'balance'));
    }
    public function AddMoneyProcess() {
        
    }
}
