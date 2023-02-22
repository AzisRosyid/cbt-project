<?php

namespace App\Controllers;

use App\Database\Migrations\TestAnswers;
use App\Models\QuestionModel;
use App\Models\QuestionOptionModel;
use App\Models\TestAnswerModel;
use App\Models\TestModel;
use App\Models\UserModel;

class Test extends BaseController
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

    public function index($id)
    {
        if (!v_pass(getTestId(), $id))
            return redirect()->back();

        // $helo = [1, 3, 5, 9, 7, 8, 2, 4];

        // srand(1234234);
        // shuffle($helo);
        // foreach ($helo as $st) {
        //     echo $st;
        // }

        // return base_url('test/'.pass($testModel->where('user_id', session()->get('id'))->orderBy("id", "desc")->first()['id']));

        $questions = getQuestions();
        $current = null;
        foreach ($questions as $i => $st) {
            $current = $i;
            if ($this->testAnswerModel->where('test_id', getTestId())->where('question_id', $st['id'])->first() == null)
                break;
        }
        $test = $this->testModel->where('id', getTestId())->first();

        //dd($questions);
        date_default_timezone_set('Asia/Jakarta');
        $date = date('d-m-Y H:i:s');
        // date('d-m-Y H:i:s', strtotime("+1 hour"));
        $time = strtotime($test['end_time']) - strtotime($date);

        $data = [
            'section' => 'test',
            'title' => 'test',
            'soal'  => $questions,
            'current' => $current,
            'nama' => session()->get('nama'),
            'date'  => date('d-m-Y', strtotime($date)),
            'time'  => date('H:i:s', $time),
        ];

        return view('test/test', $data);
    }

    public function introduction()
    {
        $data = [
            'section' => 'test',
            'title' => 'introduction'
        ];

        return view('test/introduction', $data);
    }

    public function start()
    {
        dd($this->questionModel->countAll());
        $data = [
            'user_id'     => $this->request->getVar('nip_nisn'),
            'status'      => 'stand_by',
        ];
        $this->testModel->save($data);

        dd($this->questionModel->countAll());
        foreach ($this->questionModel->findAll() as $st) {
            $test = [
                'test_id'   => getTestId(),
                'question_id'   => $st['id'],
            ];

            $this->questionModel->save($test);
        }
        
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

        $data = [
            'user_id'     => $this->request->getVar('nip_nisn'),
            'start_time'  => pass($this->request->getVar('password')),
            'finish_time' => $this->request->getVar('nama'),
            'end_time'    => $this->request->getVar('email'),
            'status'      => 'on_test',
        ];
        $this->testModel->save($data);
        return redirect()->to(base_url('test/' . pass(getTestId())));
    }
}
