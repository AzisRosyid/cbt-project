<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function test()
    {
        $data = [
            'section' => 'home',
            'title' => 'test'
        ];

        return view('home/test', $data);
    }

    public function result()
    {
        $data = [
            'section' => 'home',
            'title' => 'test'
        ];

        return view('home/result', $data);
    }

    public function profile()
    {
        $data = [
            'section' => 'home',
            'title' => 'test'
        ];

        return view('home/profile', $data);
    }
}
