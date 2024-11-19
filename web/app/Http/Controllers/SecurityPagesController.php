<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityPagesController
{
    public function AccessAccount()
    {
        $tab = 'tab-sign-in';

        return view('frontend.security.main', compact('tab'));
    }

    public function wellcome()
    {
        return view('frontend.security.pages.wellcome');
    }

    public function register()
    {
        return view('frontend.home.main');
    }

    public function login()
    {
        return view('frontend.home.main');
    }
}
