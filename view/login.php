<?php
session_start();
if(isset($_SESSION['login'])){
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

    <link type="test/css" rel="stylesheet" href="../style/default.css">
    <link type="test/css" rel="stylesheet" href="../style/style.css">
    <link type="test/css" rel="stylesheet" href="../style/header.css">
    <link type="test/css" rel="stylesheet" href="../style/content.css">
    <link type="test/css" rel="stylesheet" href="../style/footer.css">
    <link type="test/css" rel="stylesheet" href="../style/login.css">
    <link type="test/css" rel="stylesheet" href="../style/menuToggle.css">

    <script src="../js/jquery-2.2.0.min.js"></script>
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
    <script src="../js/menuToggle.js"></script>
    <script src="../controller/login.js"></script>

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
        <li class="c-menu__item"><a href="all.php" class="c-menu__link">Les plus vues</a></li>
        <li class="c-menu__item"><a href="login.php" class="c-menu__link">Se connecter</a></li>
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
    <div class="imgHeader imgAcc"><a class="transition" href="login.php"><img src="../img/account.png" alt=""></a></div>

    <div class="menuWeb">
        <div class="menuWebAll"><a class="transition" href="index.php">Accueil</a></div>
        <hr class="hrHeader">
        <div class="menuWebAll"><a href="#">Nouveautés</a></div>
        <hr class="hrHeader">
        <div class="menuWebAll"><a href="#">Populaires</a></div>
        <hr class="hrHeader">
        <div class="menuWebAll"><a class="transition" href="login.php">Se connecter</a></div>
    </div>
</header>

<main role="main" class="BebasLight">
    <div class="newTheme">
        <div class="hrLeft"></div>
        <div class="newThemeTitle BebasRegular">CONNEXION</div>
        <div class="hrRight"></div>
    </div>

    <form name="my-form" class="formConnect">
        <div>
            <img src="../img/email.png" class="imgForm" alt="">
            <input type="text" name="mail" placeholder="Email" class="inputForm">
        </div>
        <br>
        <div>
            <img src="../img/password.png" class="imgForm" alt="">
            <input type="password" name="password" placeholder="Mot de passe" class="inputForm">
        </div>
        <br>
        <div class="input">
            <input type="submit" class="submit" value="Se connecter">
        </div>
    </form>

    <div id="blocErreur" class="error"></div>
    <div id="blocSuccess" class="error"></div>

    <div class="linkInscription">Pas inscrit ? Cliquez
        <a href="inscription.php" class="redirectInscription transition BebasRegular">ici</a>
    </div>
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
