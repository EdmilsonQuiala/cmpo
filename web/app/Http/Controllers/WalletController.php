<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function AddMoney() {
        return view('frontend.wallet.pages.add-money');
    }
}
