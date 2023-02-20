<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index() {
        $data = [
            'section' => 'test',
            'title' => 'test'
        ];

        $helo = [1, 3, 5, 9, 7, 8, 2, 4];

        srand(1234234);
        shuffle($helo);
        foreach ($helo as $st) {
            echo $st;
        }

        return view('test/test', $data);
    }

    public function introduction() {
        $data = [
            'section' => 'test',
            'title' => 'introduction'
        ];

        return view('test/introduction', $data);
    }
}
