<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use App\Models\QuestionOptionModel;
use App\Models\TestAnswerModel;
use App\Models\TestModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $userModel, $testModel, $questionModel, $questionOptionModel, $testAnswerModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->questionModel = new QuestionModel();
        $this->questionOptionModel = new QuestionOptionModel();
        $this->testModel = new TestModel();
        $this->testAnswerModel = new TestAnswerModel();
        helper('method');
    }

    public function index() {
        return redirect()->to(base_url('admin/dashboard'));
    }

    public function dashboard() {
        $siswa = $this->userModel->where('level', 'User')->findAll();
        $soal = $this->questionModel->findAll();
        $hasil = $this->testModel->where('status', 'finished')->findAll();

        $data = [
            'section' => 'admin',
            'title' => 'dashboard',
            'siswa' => count($siswa),
            'soal'  => count($soal),
            'hasil' => count($hasil)
        ];

        return view('admin/dashboard', $data);
    }

    public function siswa() {
        $siswa = $this->userModel->where('level', 'User')->findAll();

        $data = [
            'section' => 'admin',
            'title' => 'siswa',
            'siswa' => $siswa
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
