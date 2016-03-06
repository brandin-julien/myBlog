<?php
require_once("../config/conf.php");

class profile{

    public function getProfile($pdo){
        $id = $_SESSION['id'];
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam("id", $_SESSION['id']);
        $stmt->execute();
        return $stmt->fetch();
    }
}