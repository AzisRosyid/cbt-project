<?php

namespace App\Controllers;

use App\Database\Migrations\TestAnswers;
use App\Models\QuestionModel;
use App\Models\QuestionOptionModel;
use App\Models\TestAnswerModel;
use App\Models\TestModel;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;
use DateTime;
use Exception;

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

    public function index($id, $no = false)
    {
        if (!v_pass(getTestId(), $id))
            return redirect()->back();

        $colors = null; $soal = null;
        $answers = getAnswers();
        foreach ($answers as $i=>$st) {
            if ($st['answer'] != null && $st['is_submit'] == true) 
                $colors[$i] = 'biru';
            elseif ($st['answer'] != null)
                $colors[$i] = 'hijau';
            elseif ($st['is_submit'] == true)
                $colors[$i] = 'orange';
            else
                $colors[$i] = '';
        }

        if (!$no) {
            foreach (getQuestions() as $i=>$st) {
                $no = $i+1;
                if ($this->testAnswerModel->where('test_id', getTestId())->where('question_id', $st['id'])->where('answer', null)->where('is_submit', false)->first() != null)
                    break;
            }

            return redirect()->to(base_url('test/'.pass(getTestId()).'/'.$no));
        }
        else 
        $soal = getQuestions()[$no-1];     
        
        $opsi = getQuestionOptions($soal['id']);
        $test = $this->testModel->where('id', getTestId())->first();
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('d-m-Y H:i:s');
        $time = abs(strtotime($test['end_time']) - strtotime($date));
        
        $data = [
            'section' => 'test',
            'title' => 'test',
            'no'    => $no,
            'soal'  => $soal,
            'colors' => $colors,
            'opsi'  => $opsi,
            'url' => 'test/'.pass(getTestId()),
            'nama' => session()->get('nama'),
            'date'  => date('d-m-Y', strtotime($date)),
            'time'  => gmdate("i:s", $time),
        ];
        
        return view('test/test', $data);
    }

    public function submit($id, $no = false) {
        dd($this->request->getPost());
        if (!v_pass(getTestId(), $id))
            return redirect()->back();

        $soal = null;
        try {
            $soal = getQuestions()[$no - 1];
        } catch (Exception $e) {
            return redirect()->back();
        }
        
        $answer = $this->request->getVar('answer');

        if ($answer) {
            $opsi = null;

            try {
                $opsi = getQuestionOptions($soal['id'])[$answer - 1];
            } catch (Exception $e) {
                return redirect()->back();
            }

            $answer = $this->testAnswerModel->where('test_id', getTestId())->where('question_id', $soal['id'])->first();
            $data = [
                'id'    => $answer['id'],
                'answer' => $opsi['option'],
                'is_submit' => true
            ];
            $this->testAnswerModel->save($data);
        } else {
            $answer = $this->testAnswerModel->where('test_id', getTestId())->where('question_id', $soal['id'])->first();
            $data = [
                'id' => $answer['id'],
                'answer' => null,
                'is_submit' => true
            ];
            $this->testAnswerModel->save($data);
        }

        return redirect()->to(base_url('test/'.pass(getTestId()).'/'.($no < count(getQuestions()) ? $no+1 : $no)));;
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
        $data = [
            'user_id'     => session()->get('id'),
            'status'      => 'stand_by',
        ];
        $this->testModel->save($data);

        foreach ($this->questionModel->findAll() as $st) {
            
            $test = [
                'test_id'   => getTestId(),
                'question_id'   => $st['id'],
                'is_submit' => false,
            ];

            $this->testAnswerModel->save($test);
        }

        $time = Time::now('Asia/Jakarta', 'in_ID');
        
        $data = [
            'id'          => getTestId(),
            'start_time'  => $time,
            'end_time'    => $time->addHours(1),
            'status'      => 'on_test',
        ];
        $this->testModel->save($data);
        return redirect()->to(base_url('test/' . pass(getTestId())));
    }
}
