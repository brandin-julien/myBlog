<?php

session_start();

var_dump($_SESSION);

if(isset($_POST['logout'])) {
    if ($_SESSION['login']) {
        unset($_SESSION['login']);
        header("location: ../view/login.html");
        exit();
    }
}

if(isset($_POST['edit'])) {
    if (($_SESSION['login'])) {
        header("location: ../view/profile.html");
        exit();
    }
}

if(isset($_POST['create'])) {
    if ($_SESSION['login']) {
        header("location: ../view/createArticle.html");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog : Index</title>
</head>
<body>
<h1>HOME</h1>

<form method="POST">
    <input type="submit" name="logout" value="logout">
    <input type="submit" name="edit" value="profile">
    <input type="submit" name="create" value="create article">
</form>

</body>
</html>
