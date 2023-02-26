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
        $test = $this->testModel->where('id', getTestId())->first();
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
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('d-m-Y H:i:s');
        $time = abs(strtotime($test['end_time']) - strtotime($date));
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
            'date'  => date('d-m-Y', strtotime($date)),
            'time'  => $time,
        ];
        
        return view('test/test', $data);
    }

    public function submit($id, $no = false) {
        if (!v_pass(getTestId(), $id))
            return redirect()->back();

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
}
