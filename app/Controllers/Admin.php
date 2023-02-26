<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index() {
        return redirect()->to(base_url('admin/dashboard'));
    }

    public function dashboard() {
        $data = [
            'section' => 'admin',
            'title' => 'dashboard'
        ];

        return view('admin/dashboard', $data);
    }

    public function siswa() {
        $data = [
            'section' => 'admin',
            'title' => 'siswa'
        ];

        return view('admin/siswa', $data);
    }

    public function soal() {
        $data = [
            'section' => 'admin',
            'title' => 'test'
        ];

        return view('admin/test', $data);
    }

    public function hasil() {
        $data = [
            'section' => 'admin',
            'title' => 'result'
        ];

        return view('admin/result', $data);
    }
}
