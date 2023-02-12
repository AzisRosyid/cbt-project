<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Navbar'
        ];

        return view('auth', $data);
    }
}
