<?php

use App\Models\TestModel;

function pass($password)
{
    return hash('sha256', hash('sha256', $password));
}

function v_pass($password, $hash)
{
    return pass($password) == $hash;
}

function onTest()
{
    if (session()->get('status') == "on_test") {
        $testModel = new TestModel();
        $url = pass($testModel->where('user_id', session()->get('id'))->orderBy("id", "desc")->first()['id']);
        return redirect()->to(base_url('test/'.$url));
    }
}
