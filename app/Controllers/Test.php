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
            if ($this->testAnswerModel->where('test_id', getTestId())->where('question_id', $st['id'])->where('answer', !null)->where('is_submit', true)->first() == null)
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
            'time'  => gmdate("i:s", $time),
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
