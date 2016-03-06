<?php

class article{

    public function getArticle($pdo){
        $stmt = $pdo->prepare("SELECT * FROM article WHERE id = :id");
        $stmt->bindParam("id",$_GET['id']);
        $stmt->execute();
        return $stmt->fetch();
    }
}