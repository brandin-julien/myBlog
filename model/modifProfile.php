<?php

class profile
{
    public function updateProfile($pdo)
    {
        $stmt = $pdo->prepare("UPDATE users SET pseudo = :username, firstname = :firstname, lastname = :lastname, mail = :email, password = :password, birthdate = :birthdate WHERE id = :id");
        $stmt->bindParam("username", $_POST['username']);
        $stmt->bindParam("firstname", $_POST['firstname']);
        $stmt->bindParam("lastname", $_POST['lastname']);
        $stmt->bindParam("email", $_POST['email']);
        $stmt->bindParam("password", $_POST['password']);
        $stmt->bindParam("birthdate", $_POST['birthdate']);
        $stmt->bindParam("id", $_SESSION['id']);
        $stmt->execute();
    }
}