<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once('./../model/myUsersList.php');

$errors = array();
$isFormGood = true;
$db = new Database();

if(!empty($_POST))
{
    if(!isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 4)
    {
        $errors['pseudo'] = 'Your pseudo should have at least 4 characters';
        $isFormGood = false;
    }
    if(!isset($_POST['password']) || strlen($_POST['password']) < 6)
    {
        $errors['password'] = 'Your password should have at least 6 characters';
        $isFormGood = false;
    }
    if(!isset($_POST['passConfirm']) || ($_POST['passConfirm'] != $_POST['password']) )
    {
        $errors['passConfirm'] = 'You Password Confirmation should be exactly like your password';
        $isFormGood = false;
    }

    if(!isset($_POST['firstname']) || !$_POST['firstname'])
    {
        $errors['firstname'] = 'The firstname field should be filled';
        $isFormGood = false;
    }

    if(!isset($_POST['lastname']) || !$_POST['lastname'])
    {
        $errors['lastname'] = 'The lastname field should be filled';
        $isFormGood = false;
    }

    if(!isset($_POST['birthdate']) || !$_POST['birthdate'])
    {
        $errors['birthdate'] = 'The birthdate field should be filled';
        $isFormGood = false;
    }

    if(!isset($_POST['gender']) || empty($_POST['gender']))
    {
        $errors['gender'] = 'Choose one of the gender';
        $isFormGood = false;
    }


    if(!$isFormGood)
    {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));
    }
    else
    {
        $salt="s*m9J[,(m,8q{)@Fd_,K`cSw^Z3-x8,/6KY{'mb)`kEgErH=";
        $_POST['password'] = sha1(sha1($_POST['password']).$salt);
        unset($_POST['passConfirm']);
        echo(json_encode(array('success'=>true, "user"=>$_POST)));
        $insertUsers = $db->insertRow("INSERT INTO myUsers(login, password, lastname, firstname, birthdate, gender)
                                        VALUE(?, ?, ?, ?, ?, ?)",
                                        [$_POST['pseudo'], $_POST['password'], $_POST['lastname'], $_POST['firstname'],
                                            $_POST['birthdate'], $_POST['gender']]);
    }
}
else
{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}