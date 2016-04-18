<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

require_once("../model/createArticleModel.php");
require_once('../utils/dbconnection.php');

$errors = array();
$isFormGood = true;
$article = new createArticle();

if(isset($_POST))
{
    if(empty($_POST['title']))
    {
        $errors['title'] = 'Saisissez un titre pour votre article<br>';
        $isFormGood = false;
    }

    if(empty($_POST['content']) || strlen($_POST['content']) < 300)
    {
        $errors['content'] = 'Le contenu doit être supérieur à 300 caractères<br>';
        $isFormGood = false;
    }

    if(empty($_POST['image']))
    {
        $errors['image'] = 'Saisissez un lien pour votre image<br>';
        $isFormGood = false;
    }

    if(!$isFormGood)
    {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));
    }
    else
    {
        $article->insertArticle($pdo);
        echo(json_encode(array('success'=>true, "article"=>$_POST)));
    }
}
else
{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}