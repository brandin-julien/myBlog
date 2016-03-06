<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

require_once("../model/login.php");
require_once('../config/conf.php');

session_start();

$errors = array();
$isFormGood = true;
$login = new login();

if(!empty($_POST))
{
    $info = $login->getLogin($pdo);


    if(!isset($_POST['mail']))
    {
        $errors['login'] = 'Veuillez saisir un email';
        $isFormGood = false;
    }

    if(!isset($_POST['password']) || strlen($_POST['password']) < 6)
    {
        $errors['password'] = 'Veuillez saisir un mot de passe de 6 caractères minimum';
        $isFormGood = false;
    }

    $salt = "akqoekvptkdke";
    $password = $_POST['password'];
    $_POST['password'] = sha1(sha1($password) . $salt);

    if($info['password'] != $_POST['password'])
    {
        $errors['bdd'] = 'Not match';
        $isFormGood = false;
    }

    if(!$isFormGood)
    {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));
    }
    else
    {
        $_SESSION['login'] = $info['pseudo'];
        $_SESSION['id'] = $info['id'];
        echo(json_encode(array('success'=>true, "user"=>$_POST)));
    }
}
else
{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
    return false;
}

