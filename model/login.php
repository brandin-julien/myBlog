<?php

class login{

    public function getLogin($pdo){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE mail = :mail");
        $stmt->bindParam("mail",$_POST['mail']);
        $stmt->execute();
        return $stmt->fetch();
    }
}