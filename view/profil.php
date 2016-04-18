<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Mon blog sur les séries</title>

    <link type="text/css" rel="stylesheet" href="../style/default.css">
    <link type="text/css" rel="stylesheet" href="../style/style.css">
    <link type="text/css" rel="stylesheet" href="../style/header.css">
    <link type="text/css" rel="stylesheet" href="../style/content.css">
    <link type="text/css" rel="stylesheet" href="../style/profil.css">
    <link type="text/css" rel="stylesheet" href="../style/footer.css">
    <link type="text/css" rel="stylesheet" href="../style/menuToggle.css">

    <script src="../js/jquery-2.2.0.min.js"></script>
    <script src="../js/UI.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script>
        $(function () {
            $.scrollUp({
                scrollName: 'scrollUp',
                scrollDistance: 50,
                scrollFrom: 'top',
                scrollSpeed: 300,
                easingType: 'linear',
                animation: 'fade',
                animationSpeed: 200,
                scrollTrigger: false,
                scrollTarget: false,
                scrollText: 'Scroll to top',
                scrollTitle: false,
                scrollImg: false,
                zIndex: 2147483647,
                activeOverlay: false

            });
        });
    </script>
    <script src="../js/script.js"></script>
    <script src="../js/inputProfil.js"></script>
    <script src="../js/menuToggle.js"></script>
    <script src="../controller/profile.js"></script>
</head>
<body>

<nav id="c-menu--slide-left" class="c-menu c-menu--slide-left">
    <ul class="c-menu__items">
        <li><a href="#" class="c-menu__link">
                <img class="onClick imgMenuToggle" src="../img/cross.png" alt="">
                <div class="titleMenu">Séries.com</div>
            </a>
        </li>
        <li class="c-menu__item"><a href="index.php" class="c-menu__link transition">Accueil</a></li>
        <li class="c-menu__item"><a href="news.php" class="c-menu__link">Nouveautés</a></li>
        <li class="c-menu__item"><a href="all.php" class="c-menu__link">Tous les articles</a></li>
        <li class="c-menu__item"><a href="createArticle.php" class="c-menu__link transition">Créer un article</a></li>
        <li class="c-menu__item"><a href="profil.php" class="c-menu__link transition">Mon Compte</a></li>
    </ul>
</nav>

<header role="banner" class="header BebasBold">
    <div class="imgHeader imgMenu">
        <a href="#">
            <img class="onClick" src="../img/menu.png" alt="">
        </a>
    </div>
    <div class="imgHeader imgHome">
        <a href="index.php" class="transition">
            <span class="title">SÉRIES.COM</span>
            <br><span class="descriptionTitle">TOUTES VOS SÉRIES EN ILLIMITÉ</span>
        </a>
    </div>
    <div class="imgHeader imgAcc">
        <a class="transition" href="profil.php">
            <img class="accountHeader" src="../img/account.png" alt="">
        </a>
        <img class="pencil" src="../img/pencil.png" alt="">
    </div>

    <div class="menuWeb">
        <div class="menuWebAll"><a class="transition" href="index.php">Accueil</a></div>
        <hr class="hrHeader">
        <div class="menuWebAll"><a href="news.php">Nouveautés</a></div>
        <hr class="hrHeader">
        <div class="menuWebAll"><a href="all.php">Tous les articles</a></div>
        <hr class="hrHeader">
        <div class="menuWebAll"><a class="transition" href="createArticle.php">Créer un article</a></div><hr class="hrHeader">
        <div class="menuWebAll"><a class="transition" href="profil.php">Mon Compte</a></div>
    </div>
</header>

<main role="main" class="SourceSansProRegular">
    <div class="accountImg"><img class="circular" src="../img/accountImg.png" alt=""></div>
    <div class="imgAcc">
        <img class="pencil" src="../img/pencil.png" alt="">
    </div>

    <?php
    require_once("../utils/dbconnection.php");
    require_once("../model/showProfile.php");
    $profile = new profile();
    $result = $profile->getProfile($pdo);

    ?>

    <form name="updateProfil" method="post" class="information" action="">
        <div class="info">Pseudo</div> <div class="infoPhp editable" data-formtype="text" data-formname="username"><?php echo($result['pseudo'])?></div>
        <div class="info">Nom</div> <div class="infoPhp editable" data-formtype="text" data-formname="firstname"><?php echo($result['firstname'])?></div>
        <div class="info">Prénom</div> <div class="infoPhp editable" data-formtype="text" data-formname="lastname"><?php echo($result['lastname'])?></div>
        <div class="info">Email</div> <div class="infoPhp editable" data-formtype="email" data-formname="email"><?php echo($result['mail'])?></div>
        <div class="info">Mot de passe</div> <div class="infoPhp editable" data-formtype="password" data-formname="password"></div>
        <div class="info">Date de naissance</div> <div class="infoPhp editable" data-formtype="date" data-formname="birthdate"><?php echo($result['birthdate'])?></div>
        <div class="requiredForUpdate">Veuillez valider vos changements</div>
        <input class="buttonMoreNSave" type="submit" value="Enregistrer les modifications">
    </form>

    <form method="POST" action="index.php">
        <input type="submit" name="logout" value="Logout" class="buttonLogout">
    </form>

    <div class="errorUpdate"></div>
</main>

<footer class="footer SourceSansPro">
    <hr>
    <div class="copyright">&copy; Series.com</div>
    <div>
        <div class="contact">
            <div class="onRight">Contact - Mention Légales - Support</div>
            <img src="../img/facebook.png" class="footerImg" alt="">
            <img src="../img/twitter.png" class="footerImg" alt="">
            <img src="../img/instagram.png" class="footerImg" alt="">
        </div>
    </div>
</footer>

</body>
</html>