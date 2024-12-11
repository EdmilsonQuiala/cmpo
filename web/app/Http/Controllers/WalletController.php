<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;
use App\Models\AddMoneyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class WalletController extends Controller
{
    public function AddMoney()
    {
        $user = Auth::user();
        $preference = Preference::where('user_id', $user->id)->first();
        $balance = $user->balance;
        $CurrentPage = 'AddMoney';

        return view('frontend.wallet.main', compact('CurrentPage', 'user', 'preference', 'balance'));
    }

    public function AddMoneyProcess(Request $request)
    {
        $request->validate([
            'qtd' => 'required|numeric|min:1',
            'coin' => 'required|string',
        ]);

        $user = Auth::user();

        // Criar a solicitação de adicionar dinheiro
        AddMoneyRequest::create([
            'user_id' => $user->id,
            'qtd' => $request->qtd,
            'coin' => $request->coin,
            'status' => 'pending',
        ]);

        // Enviar notificação por e-mail
        Mail::raw('O seu pedido foi feito e será processado. Você receberá uma notificação.', function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Solicitação de Adição de Dinheiro');
        });

        return response()->json([
            'message' => 'O seu pedido foi feito e será processado. Você receberá uma notificação.',
        ]);
    }
}
