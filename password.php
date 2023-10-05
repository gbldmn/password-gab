<?php

$lunghezzaPassword = $_POST['lunghezza_password'];
var_dump($lunghezzaPassword);

function randomPass($lunghezzaPassword){
    $password = '';
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';

    for($i = 0; $i < $lunghezzaPassword; $i++){
        $password .= $caratteri[rand (0, strlen($caratteri) -1 )];
    };
    return $password;
}
var_dump(randomPass($lunghezzaPassword));