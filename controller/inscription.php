<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

require_once("../model/register.php");
require_once('../config/conf.php');


$errors = array();
$isFormGood = true;
$register = new register();

if(!empty($_POST))
{
    if(!isset($_POST['username']) || strlen($_POST['username']) < 4)
    {
        $errors['username'] = 'Saisissez un pseudo superieur à 3 caracteres<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = 'Saisissez un email valide';
        $isFormGood = false;
    }

    if(!isset($_POST['password']) || strlen($_POST['password']) < 6)
    {
        $errors['password'] = 'Saisissez un mdp superieur à 5 caracteres<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['verifPassword']) || $_POST['verifPassword'] !== $_POST['password'])
    {
        $errors['verifPassword'] = 'Saisissez une vérif identique au mdp<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['verifPassword']) || $_POST['verifPassword'] !== $_POST['password'])
    {
        $errors['verifPassword'] = 'Saisissez une vérif identique au mdp<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['verifPassword']) || $_POST['verifPassword'] !== $_POST['password'])
    {
        $errors['verifPassword'] = 'Saisissez une vérif identique au mdp<br>';
        $isFormGood = false;
    }

    if(!isset($_POST['verifPassword']) || $_POST['verifPassword'] !== $_POST['password'])
    {
        $errors['verifPassword'] = 'Saisissez une vérif identique au mdp<br>';
        $isFormGood = false;
    }

    if(!$isFormGood)
    {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));
    }
    else
    {
        $salt = "48@!alsd";
        $password = $_POST['password'];
        $_POST['password'] = sha1(sha1($password) . $salt); // cryptage du password

        /*
         * faire un trim(htmlentities())
         */

        unset($_POST['verifPassword']);
        echo(json_encode(array('success'=>true, "user"=>$_POST)));

        $insertUsers = $register->insertLogin($pdo);

    }
}
else
{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}