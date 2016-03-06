<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="../lib/jquery-2.2.0.min.js"></script>
    <script src="../controller/signInAjax.js"></script>
</head>
<body>

    <form method="POST">

        Pseudo:<br>
        <input type="text" name="pseudo"><br><br>

        Password:<br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Sign In">

    </form>

    <div id="errorBlock"></div>
    <div id="successBlock"></div>

</body>
</html>