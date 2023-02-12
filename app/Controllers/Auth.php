<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'section' => 'auth',
            'title' => 'auth'
        ];

        return view('auth', $data);
    }
}
