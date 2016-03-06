<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="../lib/jquery-2.2.0.min.js"></script>
    <script src="../controller/signUpAjax.js"></script>
</head>
<body>

<form method="POST">

    Pseudo:<br>
    <input type="text" name="pseudo"><br><br>

    LastName:<br>
    <input type="text" name="lastname"><br><br>

    FirstName:<br>
    <input type="text" name="firstname"><br><br>

    Birthdate:<br>
    <input type="date" name="birthdate"><br><br>

    Vous êtes :<br>

    <input type="radio" name="gender" value="male">Un Homme<br>
    <input type="radio" name="gender" value="female">Une Femme<br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    Password Confirmation:<br>
    <input type="password" name="passConfirm"><br><br>

    <input type="submit" value="Sign Up">

</form>

<div id="errorBlock"></div>
<div id="successBlock"></div>

</body>
</html>