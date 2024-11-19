<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPagesController
{
    public function home()
    {
        return view('frontend.home.main');
    }
}
