<?php

namespace App\Controllers;

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

        $test = $this->testModel->where('id', getTestId())->first();
        $date = Time::now('Asia/Jakarta', 'in_ID');
        $time = strtotime($test['end_time']) - strtotime($date->toDateTimeString());
        $colors = null; $soal = null;

        if ($time <= 0)
           return redirect()->to(base_url('test/'.pass(getTestId()).'/finish')); 

        if (!$no) {
            foreach (getQuestions() as $i=>$st) {
                $no = $i+1;
                if ($this->testAnswerModel->where('test_id', getTestId())->where('question_id', $st['id'])->where('option_id', null)->where('is_submit', false)->first() != null)
                    break;
            }

            return redirect()->to(base_url('test/'.pass(getTestId()).'/'.$no));
        }
        else 
        $soal = getQuestions()[$no-1];

        $opsi = getQuestionOptions($soal['id']);
        $jawab = $this->testAnswerModel->where('question_id', $soal['id'])->where('test_id', getTestId())->first();
        
        $answers = getAnswers();
        foreach ($answers as $i=>$st) {
            if ($st['option_id'] != null && $st['is_submit'] == true) 
                $colors[$i] = 'biru';
            elseif ($st['option_id'] != null)
                $colors[$i] = 'hijau';
            elseif ($st['is_submit'] == true)
                $colors[$i] = 'orange';
            else
                $colors[$i] = '';
        }
        
        // gmdate("i:s", $time)
        
        $data = [
            'section' => 'test',
            'title' => 'test',
            'no'    => $no,
            'soal'  => $soal,
            'colors' => $colors,
            'opsi'  => $opsi,
            'jawab' => $jawab,
            'url' => 'test/'.pass(getTestId()),
            'nama' => session()->get('nama'),
            'date'  => date('d-m-Y', strtotime($date->toDateTimeString())),
            'time'  => $time,
        ];
        
        return view('test/test', $data);
    }

    public function submit($id, $no = false) {
        if (!v_pass(getTestId(), $id))
            return redirect()->back();

        $test = $this->testModel->where('id', getTestId())->first();
        $date = Time::now('Asia/Jakarta', 'in_ID');
        $time = strtotime($test['end_time']) - strtotime($date->toDateTimeString());

        if ($time <= 0)
            return redirect()->to(base_url('test/' . pass(getTestId()) . '/finish')); 

        $soal = null; $is_submit = false;
        try {
            $soal = getQuestions()[$no - 1];
            if ($this->request->getVar('button') == 'submit')
                $is_submit = true;
        } catch (Exception $e) {
            return redirect()->back();
        }
        
        $answer = $this->request->getVar('answer');

        if ($answer) {
            $opsi = null; $jawab = null;

            try {
                $opsi = getQuestionOptions($soal['id'])[$answer - 1];
            } catch (Exception $e) {
                return redirect()->back();
            }

            $answer = $this->testAnswerModel->where('test_id', getTestId())->where('question_id', $soal['id'])->first();

            if ($answer['option_id'] == $opsi['id'] && !$is_submit && $answer['is_submit']) {
                $is_submit = true;
                $jawab = $answer['option_id'];
            } else {
                $jawab = $opsi['id'];
            }

            $data = [
                'id'    => $answer['id'],
                'option_id' => $jawab,
                'is_submit' => $is_submit
            ];
            $this->testAnswerModel->save($data);
        } else {
            $jawab = null;
            $answer = $this->testAnswerModel->where('test_id', getTestId
            ())->where('question_id', $soal['id'])->first();

            if ($answer['is_submit'] && !$is_submit) {
                $is_submit = true;
                $jawab = $answer['option_id'];
            }
            else if ($answer['is_submit'])
                $is_submit = true;
            else if (!$is_submit)
                $jawab = $answer['option_id'];

            $data = [
                'id' => $answer['id'],
                'option_id' => $jawab,
                'is_submit' => $is_submit
            ];
            $this->testAnswerModel->save($data);
        }

        $nomor = $this->request->getVar('button');
        if ($nomor != 'submit')
            return redirect()->to(base_url('test/'.pass(getTestId()).'/'.($nomor <= count(getQuestions()) ? $nomor : $no)));;

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

    public function finish($id) {
        if (!v_pass(getTestId(), $id))
            return redirect()->back();

        $time = Time::now('Asia/Jakarta', 'in_ID');;
        
        $data = [
            'id'    => getTestId(),
            'finish_time' => $time,
            'status' => 'finished'
        ];
        $this->testModel->save($data);

        $test = $this->testModel->where('id', getTestId())->first();

        $data = [
            'section' => 'test',
            'title' => 'test',
            'url' => 'test/'.pass(getTestId()),
            'message' => $test['finish_time'] > $test['end_time'] ? "Waktu Habis!" : "Test Selesai!"
        ];
        
        return view('test/finish', $data);
    }

    public function result($id) {
        foreach ($this->testModel->findAll() as $st) 
            if (v_pass($st['id'], $id))
                $id = $st['id'];
        $test = $this->testModel->where('id', $id)->first();
        if (!$test)
            return redirect()->back();

        $correct = 0; $wrong = 0; $skipped = 0; $unanswered = 0; 

        $answers = $this->testAnswerModel->where('test_id', $test['id'])->findAll();

        foreach ($answers as $st) {
            $option = $this->questionOptionModel->where('id', $st['option_id'])->first();
            if (!$st['is_submit'])
                $skipped += 1;
            elseif ($st['option_id'] == null)
                $unanswered += 1;
            elseif ($option['is_correct'])
                $correct += 1;
            else 
                $wrong += 1;
        }

        $score = $correct / count($answers) * 100;
        $time = strtotime($test['finish_time']) - strtotime($test['start_time']);
        
        $data = [
            'section' => 'test',
            'title'   => 'result',
            'nama'    => session()->get('nama'),
            'correct' => $correct,
            'wrong'   => $wrong,
            'skipped' => $skipped,
            'unanswered' => $unanswered,
            'score'   => $score,
            'time'    => date('i:s', $time),
            'url' => 'test/'.pass(getTestId()),
        ];

        return view('test/result', $data);
    }
}
