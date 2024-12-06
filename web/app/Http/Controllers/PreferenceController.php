<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Preference;

class PreferenceController extends Controller
{
    public function toggleHideMoney(Request $request)
    {
        $user = Auth::user();

        // Buscar ou criar preferência do usuário
        $preference = Preference::firstOrCreate(
            ['user_id' => $user->id],
            ['hide_money' => 'no']
        );

        // Atualizar o campo `hide_money`
        $preference->hide_money = $request->hide_money ? 'yes' : 'no';
        $preference->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Preferência salva com sucesso.',
        ]);
    }
}

