<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index() {
        $data = [
            'section' => 'test',
            'title' => 'test'
        ];

        return view('test/test', $data);
    }
}
