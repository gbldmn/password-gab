<?php

$lunghezzaPassword = $_GET['lunghezza_password'];
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];

function randomPass($lunghezzaPassword){
    $password = '';
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';

    for($i = 0; $i < $lunghezzaPassword; $i++){
        $password .= $caratteri[rand (0, strlen($caratteri) -1 )];
    }
    return $password;
}
// var_dump(randomPass($lunghezzaPassword));
$risultatoFinale = randomPass($lunghezzaPassword);
// var_dump($risultatoFinale);