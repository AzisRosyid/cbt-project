<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        $data = [
            'section' => 'home',
            'title' => 'home'
        ];

        dd();

        return view('home/home', $data);
    }
}
