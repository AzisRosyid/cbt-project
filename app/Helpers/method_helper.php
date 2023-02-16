<?php 
function pass($password) {
    return hash('sha256', hash('sha256', $password));
}

function v_pass($password, $hash) {
    return pass($password) == $hash;
}

function auth() {

}