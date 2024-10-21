<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cardsController extends Controller
{
    public function cards()
    {
        return view('frontend.cards.cards');
    }
}
