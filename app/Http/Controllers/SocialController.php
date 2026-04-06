<?php

namespace App\Http\Controllers;

class SocialController extends Controller
{
    public function index()
    {
        $accounts = [
            'facebook'  => 'https://www.facebook.com/UCCJamaica',
            'twitter'   => 'https://twitter.com/UCCJamaica',
            'instagram' => 'https://www.instagram.com/ucc_jamaica',
        ];

        return view('pages.social', compact('accounts'));
    }
}
