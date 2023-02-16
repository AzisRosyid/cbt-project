<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper('method');
    }

    public function loginIndex()
    {
        $data = [
            'section' => 'auth',
            'title' => 'login'
        ];

        return view('auth/login', $data);
    }

    public function registerIndex()
    {
        $data = [
            'section' => 'auth',
            'title' => 'register'
        ];

        return view('auth/register', $data);
    }

    public function login()
    {
      //  dd($this->request->getPost());
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
                    'level' => $data['level']
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/test'));
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->back();
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->back();
        }
    }

    public function register()
    {
      //  dd($this->request->getPost());
        $rules = [
            'nip_nisn'      => 'required|numeric|min_length[10]|is_unique[users.nip_nisn]',
            'password'      => 'required|min_length[8]',
            'nama'          => 'required|min_length[2]',
            'email'         => 'required|min_length[4]|valid_email|is_unique[users.email]',
            'sebagai'       => 'required',
            'sekolah'       => 'required',
            'provinsi'      => 'required',
            'tahu'          => 'required'
                   
            // 'confirmpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'nip_nisn'  => $this->request->getVar('nip_nisn'),
                'password'  => pass($this->request->getVar('password')),
                'nama'      => $this->request->getVar('nama'),
                'email'     => $this->request->getVar('email'),
                'level'     => 'User',
                'sebagai'   => $this->request->getVar('sebagai'),
                'sekolah'   => $this->request->getVar('sekolah'),
                'provinsi'  => $this->request->getVar('provinsi'),
                'tahu'      => $this->request->getVar('tahu'),
            ];
            $this->userModel->save($data);
            return redirect()->to(base_url('login'));
        } else {
            $data['validation'] = $this->validator;
            $data['section'] = 'auth';
            $data['title'] = 'register';
            return view('auth/register', $data);
        }
    }
}