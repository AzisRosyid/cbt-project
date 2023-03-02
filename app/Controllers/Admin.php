<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use App\Models\QuestionOptionModel;
use App\Models\TestAnswerModel;
use App\Models\TestModel;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;
use Config\Database;

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
        $search = $this->request->getVar('search') ? $this->request->getVar('search') : '';
        $siswa = $this->userModel->like('nama', $search)->where('level', 'User')->orLike('nip_nisn', $search)->where('level', 'User')->orLike('sekolah', $search)->where('level', 'User')->findAll();

        $data = [
            'section' => 'admin',
            'title' => 'siswa',
            'siswa' => $siswa,
            'search' => $search,
        ];

        return view('admin/siswa', $data);
    }

    public function soal() {
        $benar = []; $label = [];

        foreach ($this->questionModel->findAll() as $i=>$st) {
            $correct = 0;
            $answer = $this->testAnswerModel->where('question_id', $st['id'])->findAll();
            foreach($answer as $s) {
                if ($s['option_id']) {
                    $opsi = $this->questionOptionModel->where('id', $s['option_id'])->first();
                    if ($opsi['is_correct'])
                        $correct++;
                }
            }
            $benar[$i] = $correct;
            $label[$i] = 'soal '.($i+1);
        }

        $data = [
            'section' => 'admin',
            'title' => 'soal',
            'benar' => json_encode($benar),
            'label' => json_encode($label)
        ];

        return view('admin/soal', $data);
    }

    public function hasil() {
        $hasil = []; $label = ['No.', 'Nama'];
        $search = $this->request->getVar('search') ? $this->request->getVar('search') : '';
        $url = current_url().'?'.$_SERVER['QUERY_STRING']; 

        $db = Database::connect();
        $query = $db->query("SELECT ts.id, ts.user_id FROM tests as ts JOIN users as us ON ts.user_id = us.id WHERE us.nama LIKE '%".$search."%' LIMIT 200");
        
        foreach ($query->getResultArray() as $i=>$st) {
            $test = [$this->userModel->where('id', $st['user_id'])->first()['nama']];
            foreach ($this->testAnswerModel->where('test_id', $st['id'])->findAll() as $id=>$s) {
                $label[$id+2] = 'soal '.($id+1);
                if ($s['option_id']) {
                    $opsi = $this->questionOptionModel->where('id', $s['option_id'])->first();
                    $test[$id+1] = $opsi['is_correct'].ucwords($opsi['option']);
                } else
                    $test[$id+1] = '0-';
            }
            $hasil[$i] = $test;
        }

        $data = [
            'section' => 'admin',
            'title' => 'hasil',
            'label' => $label,
            'hasil' => $hasil,
            'url' => $url,
            'search' => $search,
        ];

        return view('admin/hasil', $data);
    }

    public function hasilCsv() {
        $hasil = []; $label = ['No.', 'Nama'];
        $search = $this->request->getVar('search') ? $this->request->getVar('search') : '';

        $db = Database::connect();
        $query = $db->query("SELECT ts.id, ts.user_id FROM tests as ts JOIN users as us ON ts.user_id = us.id WHERE us.nama LIKE '%".$search."%' LIMIT 200");
        if (!$query->getResultArray())
            return redirect()->back();
        
        foreach ($query->getResultArray() as $i=>$st) {
            $test = [$i+1, $this->userModel->where('id', $st['user_id'])->first()['nama']];
            foreach ($this->testAnswerModel->where('test_id', $st['id'])->findAll() as $id=>$s) {
                $label[$id+2] = 'soal '.($id+1).'';
                if ($s['option_id']) {
                    $opsi = $this->questionOptionModel->where('id', $s['option_id'])->first();
                    $test[$id+2] = $opsi['is_correct'].ucwords($opsi['option']);
                } else
                    $test[$id+2] = '0-';
            }
            $hasil[$i] = $test;
        }

        $filename = 'hasil_'.date('y-m-d-H-i-s').'.csv';
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
        $file = fopen('php://output', 'w');
        fputcsv($file, $label);
        foreach ($hasil as $line){ 
            fputcsv($file,$line); 
        }
        fclose($file);
        exit;

        return redirect()->back();
    }
}
