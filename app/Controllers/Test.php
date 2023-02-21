<?php

namespace App\Controllers;

use App\Models\TestModel;
use App\Models\UserModel;

class Test extends BaseController
{
    protected $userModel, $testModel;

    public function __construct() {
        $userModel = new UserModel();
        $testModel = new TestModel();
        helper('method');
    }

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

        return session()->get('status');

        return view('test/introduction', $data);
    }

    public function start() {
        $session = session();
        $userModel = new UserModel();
        $nip_nisn = $this->request->getVar('nip_nisn');
        $password = $this->request->getVar('password');

        $data = $userModel->where('nip_nisn', $nip_nisn)->first();

        if ($data) {
            $pass = $data['password'];
            if (v_pass($password, $pass)) {
                
                $ses_data = [
                    'id' => $data['id'],
                    'nama' => $data['nama'],
                    'level' => $data['level'],
                    'status' => 'helo'
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/test/introduction'));
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->back();
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->back();
        }
        // if ($this->validate($rules)) {
        //     $data = [
        //         'nip_nisn'  => $this->request->getVar('nip_nisn'),
        //         'password'  => pass($this->request->getVar('password')),
        //         'nama'      => $this->request->getVar('nama'),
        //         'email'     => $this->request->getVar('email'),
        //         'level'     => 'User',
        //         'sebagai'   => $this->request->getVar('sebagai'),
        //         'sekolah'   => $this->request->getVar('sekolah'),
        //         'provinsi'  => $this->request->getVar('provinsi'),
        //         'tahu'      => $this->request->getVar('tahu'),
        //     ];
        //     $this->userModel->save($data);
        //     return redirect()->to(base_url('login'));
        // } else {
        //     $data['validation'] = $this->validator;
        //     $data['section'] = 'auth';
        //     $data['title'] = 'register';
        //     return view('auth/register', $data);
        // }
    }
}
