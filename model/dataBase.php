<?php

require_once("../config/dbconf.php");


class dataBase{

    public function __construct(){

    }



    $stmt = $pdo->prepare("UPDATE user SET `best_score` = :best where id = :id");
    $stmt->bindParam("best",$_SESSION['best_score']);
    $stmt->bindParam("id",$_SESSION['id']);
    $stmt->execute();
    $result = $stmt->fetch();

}