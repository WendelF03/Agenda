<?php
namespace Classes;
include ("../user/index.php");
use Models\ModelConect;

class ClassEvents extends ModelConect{

    
    public function getEvents(){
        $b=$this->conectBD()->prepare("SELECT * FROM `events`");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }
    
    #Criação do Evento no banco
    public function createEvent($id=0,$title,$description,$color,$start,$end){
        $b=$this->conectBD()->prepare("INSERT INTO `events` VALUES (?,?,?,?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $title, \PDO::PARAM_STR);
        $b->bindParam(3, $description, \PDO::PARAM_STR);
        $b->bindParam(4, $color, \PDO::PARAM_STR);
        $b->bindParam(5, $start, \PDO::PARAM_STR);
        $b->bindParam(6, $end, \PDO::PARAM_STR);
        $b->execute();
        header("Location: http://localhost/views/user/");
    }

    #Buscar Eventos por Id
    public function getEventsById($id){
        $b=$this->conectBD()->prepare("SELECT * FROM `events` WHERE id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();
        return $f=$b->fetch(\PDO::FETCH_ASSOC);
    }

    #Update no Banco de Dados
    public function updateEvent($id,$title,$description,$color,$start,$end){
        $b=$this->conectBD()->prepare("UPDATE `events` SET title=?, description=?, color=?, start=?, end=? WHERE id=?");
        $b->bindParam(1, $title, \PDO::PARAM_STR);
        $b->bindParam(2, $description, \PDO::PARAM_STR);
        $b->bindParam(3, $color, \PDO::PARAM_STR);
        $b->bindParam(4, $start, \PDO::PARAM_STR);
        $b->bindParam(5, $end, \PDO::PARAM_STR);
        $b->bindParam(6, $id, \PDO::PARAM_INT);
        $b->execute();
    }

    #Deletar no Banco de Dados
    public function deleteEvent($id){
        $b=$this->conectBD()->prepare("DELETE FROM `events` WHERE id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();
        header("Location: http://localhost/views/user/");
    }

    #Login do Usuario
    public function login($email,$senha){
        $consulta=$this->conectBD()->prepare("SELECT id FROM `usuario` WHERE email= :email AND senha=:senha"); 
        $consulta->bindValue(":email",$email);
        $consulta->bindValue(":senha",$senha);
        $consulta->execute();
        if($consulta->rowCount() >0 ){
            $dado = $consulta->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true;
        }else{
            return false;
        }

    }

    #Cadastro do Usuário
    public function cadastro($id=0,$email,$senha){
        $b=$this->conectBD()->prepare("INSERT INTO `usuario` VALUES (?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $email, \PDO::PARAM_STR);
        $b->bindParam(3, $senha, \PDO::PARAM_STR);
        $b->execute();

    }


}