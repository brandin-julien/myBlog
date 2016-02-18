<?php

require_once('../config/conf.php');

class register{

    public function insertLogin($pdo){
        $stmt = $pdo->prepare("INSERT INTO users(pseudo, password, lastname, firstname, birthdate, mail /*memberReg*/)
                                        VALUE(:pseudo, :password, :lastname, :firstname, :birthdate, :mail /*=NOW()*/)");
        $stmt->bindParam("pseudo",$_POST['username']);
        $stmt->bindParam("password",$_POST['password']);
        $stmt->bindParam("lastname",$_POST['lastname']);
        $stmt->bindParam("firstname",$_POST['firstname']);
        $stmt->bindParam("birthdate",$_POST['birthdate']);
        $stmt->bindParam("mail",$_POST['email']);
        $stmt->execute();
    }
}