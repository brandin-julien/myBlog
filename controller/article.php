<?php

class article{

    public function get6Articles($pdo){
        $i = 0;
        $stmt = $pdo->prepare("SELECT * FROM article ORDER BY id DESC LIMIT 6");
        $stmt->execute();
        while($row = $stmt->fetch()) {
            $tab[$i++] = $row;
        }
        return $tab;
    }

    public function getPopularArticles($pdo){
        $i = 0;
        $stmt = $pdo->prepare("SELECT * FROM `article` WHERE id % 2 = 1");
        $stmt->execute();
        while($row = $stmt->fetch()) {
            $tab[$i++] = $row;
        }
        return $tab;
    }

    public function get9Articles($pdo){
        $i = 0;
        $stmt = $pdo->prepare("SELECT * FROM article ORDER BY id DESC LIMIT 9");
        $stmt->execute();
        while($row = $stmt->fetch()) {
            $tab[$i++] = $row;
        }
        return $tab;
    }

    public function getAllArticles($pdo){
        $i = 0;
        $stmt = $pdo->prepare("SELECT * FROM article ORDER BY id");
        $stmt->execute();
        while($row = $stmt->fetch()) {
            $tab[$i++] = $row;
        }
        return $tab;
    }
}