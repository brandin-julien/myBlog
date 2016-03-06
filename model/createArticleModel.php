<?php

require_once('../config/conf.php');

class createArticle{

    public function insertArticle($pdo){
        $stmt = $pdo->prepare("INSERT INTO article(title, content, image)
                                        VALUE(:title, :content, :image)");
        $stmt->bindParam("title",$_POST['title']);
        $stmt->bindParam("content",$_POST['content']);
        $stmt->bindParam("image",$_POST['image']);
        $stmt->execute();
    }
}