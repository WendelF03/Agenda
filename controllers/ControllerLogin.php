<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();


if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

   if($objEvents->login($email,$senha)){
    
    header("Location: http://localhost/views/user/agenda.php");
   }else{
    header("Location: http://localhost/views/user/login.php");

}

    
 

}else{
    header("Location: http://localhost/views/user/login.php");
}




?>
