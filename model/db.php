<?php

require_once('../config/dbconf.php');

global $pdo;

class Database {
    public $isConnect;
    protected $datab;

    //Connect to db
    public function __construct($username = "root", $password = "", $host = "mysql:host=127.0.0.1", $dbname = "myblog") {
        $this->isConnect = TRUE;
        try {
            $this->datab = new PDO("$host;dbname=$dbname", $username, $password);
        } catch(PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getLogin($params){
        $stmt = $this->datab->prepare("SELECT * FROM users WHERE login = :login");
        $stmt->bindParam("login",$params);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insertLogin(){
        $stmt = $this->datab->prepare("INSERT INTO users(login, password, lastname, firstname, birthdate, mail /*memberReg*/)
                                        VALUE(:login, :password, :lastname, :firstname, :birthdate, :mail /*=NOW()*/)");
        $stmt->bindParam("login",$_POST['username']);
        $stmt->bindParam("password",$_POST['password']);
        $stmt->bindParam("lastname",$_POST['lastname']);
        $stmt->bindParam("firstname",$_POST['firstname']);
        $stmt->bindParam("birthdate",$_POST['birthdate']);
        $stmt->bindParam("mail",$_POST['email']);
        $stmt->execute();
    }
}

