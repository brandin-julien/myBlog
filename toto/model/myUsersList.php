<?php

require_once('../config/dbconf.php');

class Database {
    public $isConnect;
    protected $datab;

    //Connect to db
    public function __construct($username = "root", $password = "", $host = "mysql:host=127.0.0.1", $dbname = "licorne", $options = []) {
        $this->isConnect = TRUE;
        try {
            $this->datab = new PDO($config['host'], $config['user'], $config['password']);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    //Disconnect from db
    public function disconnect(){
        $this->datab = NULL;
        $this->isConnect = FALSE;
    }
    //Get row
    public function getRow($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch(PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    //Get rows
    public function getRows($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    //Insert row
    public function insertRow($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return TRUE;
        } catch(PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    //Update row
    public function updateRow($query, $params = []){
        $this->insertRow($query, $params);
        return TRUE;
    }
    //Delete row
    public function deleteRow($query, $params = []){
        $this->insertRow($query, $params);
        return TRUE;
    }
}

