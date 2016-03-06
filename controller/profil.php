<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

session_start();
require_once('../config/conf.php');
require_once("../model/modifProfile.php");


$errors = array();
$isFormGood = true;
$register = new profile();

var_dump($_SESSION['id']);

if(!empty($_POST))
{
    if(!isset($_POST['username']) || strlen($_POST['username']) < 4)
    {
        $errors['username'] = 'Saisissez un pseudo supérieur à 3 caractères<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = 'Saisissez un email valide';
        $isFormGood = false;
    }

    if(!isset($_POST['password']) || strlen($_POST['password']) < 6)
    {
        $errors['password'] = 'Saisissez un mdp supérieur à 5 caractères<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['birthdate']))
    {
        $errors['birthdate'] = 'Saisissez une date de naissance<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['firstname']) || strlen($_POST['firstname']) <= 2)
    {
        $errors['firstname'] = 'Saisissez un prénom valide<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['lastname']) || strlen($_POST['lastname']) <= 2)
    {
        $errors['lastname'] = 'Saisissez un nom valide<br>';
        $isFormGood = false;
    }

    if(!$isFormGood)
    {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));
    }
    else
    {
        $salt = "akqoekvptkdke";
        $password = $_POST['password'];
        $_POST['password'] = sha1(sha1($password) . $salt);

        $_POST['username'] = trim(htmlentities($_POST['username']));
        $_POST['password'] = trim(htmlentities($_POST['password']));
        $_POST['firstname'] = trim(htmlentities($_POST['firstname']));
        $_POST['lastname'] = trim(htmlentities($_POST['lastname']));
        $_POST['email'] = trim(htmlentities($_POST['email']));

        echo(json_encode(array('success'=>true, "user"=>$_POST)));

        $insertUsers = $register->updateProfile($pdo);

        var_dump($insertUsers);

    }
}
else
{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}