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

    public function index()
    {
        $data = [
            'section' => 'auth',
            'title' => 'auth'
        ];

        return view('auth', $data);
    }

    public function login()
    {
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $userModel->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            if (v_pass($password, $pass)) {
                $ses_data = [
                    'id' => $data['id'],
                    'nama' => $data['nama'],
                    'level' => $data['level']
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/home/test'));
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/');
        }
    }

    public function register()
    {
        $rules = [
            'username'      => 'required|is_unique[users.username]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'name'          => 'required|min_length[2]|max_length[50]',
      //      'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            // 'confirmpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => pass($this->request->getVar('password')),
                'nama'     => $this->request->getVar('name'),
          //      'email'    => $this->request->getVar('email'),
                'level'    => 'User',
            ];
            $this->userModel->save($data);
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            echo view('auth', $data);
        }
    }
}