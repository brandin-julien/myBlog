<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once('./../model/myUsersList.php');

$errors = array();
$isFormGood = true;
$db = new Database();


if(!empty($_POST))
{
    $myLogData = $db->getRows("SELECT id,login,password FROM myUsers WHERE login=?", [$_POST['pseudo']]);

    if(!isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 4)
    {
        $errors['pseudo'] = 'Veuillez saisir un pseudo valide';
        $isFormGood = false;
    }
    if(!isset($_POST['password']) || strlen($_POST['password']) < 6)
    {
        $errors['password'] = 'Veuillez saisir un mot de passe valide';
        $isFormGood = false;
    } else {
        $salt="s*m9J[,(m,8q{)@Fd_,K`cSw^Z3-x8,/6KY{'mb)`kEgErH=";
        $_POST['password'] = sha1(sha1($_POST['password']).$salt);
    }

    if($myLogData[0]['login'] != $_POST['pseudo'] || $myLogData[0]['password'] != $_POST['password']){
        $errors['Database Error '] = 'Your Pseudo and your Password is not matching !';
        $isFormGood = false;
    }

    if(!$isFormGood)
    {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));
    }
    else
    {
        echo(json_encode(array('success'=>true, "user"=>$_POST)));
    }
}

else
{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}




