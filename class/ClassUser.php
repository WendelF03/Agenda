<?php
    include ("../config/config.php");
    $objEvents=new \Classes\ClassEvents();
    $objModels = new \Models\ModelConect();

    class ClassUser{

        public function login($email,$senha){

            $b=$this->conectBD()->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
            $b->bindValue(':email', $email);
            $b->bindValue(':senha', $senha);
            $b->excute();
            
        }


    }

?>