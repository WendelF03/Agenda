<?php

namespace Models;

abstract class ModelConect{

    protected  function conectBD(){
        try {
           $con=new \PDO("mysql:host=".HOST.";dbname=".DB."",USER,PASS);
           return  $con;
        } catch (\PDOException $erro) {
            return $erro->getMessage();
        }
    }
}
?>