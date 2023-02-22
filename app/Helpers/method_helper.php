<?php

use App\Models\QuestionModel;
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