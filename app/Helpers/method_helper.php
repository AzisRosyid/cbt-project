<?php 
function pass($password) {
    return hash('sha256', hash('sha256', $password));
}

function v_pass($password, $hash) {
    return pass($password) == $hash;
}

function dataHome() {
    $data = [
        'section' => 'home',
        'title' => 'home'
    ];

    return $data;
}

function dataLogin() {
    $data = [
        'section' => 'auth',
        'title' => 'login'
    ];

    return $data;
}

function dataRegister() {
    $data = [
        'section' => 'auth',
        'title' => 'register'
    ];

    return $data;
}

function dataTest() {
    $data = [
        'section' => 'test',
        'title' => 'test'
    ];

    return $data;
}