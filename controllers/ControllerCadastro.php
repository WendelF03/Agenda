<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$email=filter_input(INPUT_POST,'email',FILTER_DEFAULT);
$senha=filter_input(INPUT_POST,'senha',FILTER_DEFAULT);


$objEvents->cadastro(
    0,
    $email,
    $senha
);