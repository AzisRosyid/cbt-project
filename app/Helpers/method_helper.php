<?php

use App\Models\QuestionModel;
use App\Models\QuestionOptionModel;
use App\Models\TestAnswerModel;
use App\Models\TestModel;

function pass($password)
{
    return hash('sha256', hash('sha256', $password));
}

function v_pass($password, $hash)
{
    return pass($password) == $hash;
}

function getTestId()
{
    $testModel = new TestModel();
    return $testModel->where('user_id', session()->get('id'))->orderBy("id", "desc")->first()['id'];
}

function getQuestions()
{
    $questionModel = new QuestionModel();
    $questions = $questionModel->findAll();
    srand(getTestId());
    shuffle($questions);
    return $questions;
}

function getQuestionOptions($id) 
{
    $opsi = null;
    $questionOptionModel = new QuestionOptionModel();
    $questionOptions = $questionOptionModel->where('question_id', $id)->orderBy('option', 'asc')->findAll();
    foreach ($questionOptions as $i=>$st) 
        $opsi[$i] = $st;
    return $opsi;
}

function getAnswers() {
    $testAnswerModel = new TestAnswerModel();
    $answers = $testAnswerModel->where('test_id', getTestId())->findAll();
    srand(getTestId());
    shuffle($answers);
    return $answers;
}

function r_session()
{
    if (session()->get('id') == null)
        return;
    $testModel = new TestModel();
    $status = 'none';
    try {
        $status = $testModel->where('user_id', session()->get('id'))->orderBy("id", "desc")->first()['status'];
    } catch (Exception $e) { }

    $data = [
        'id' => session()->get('id'),
        'nama' => session()->get('nama'),
        'level' => session()->get('level'),
        'status' => $status
    ];

    session()->set($data);
    return;
}