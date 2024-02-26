<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Xilium</title>
    <link rel="stylesheet" href="../../css/global/main/main.css" />
    <link rel="stylesheet" href="../../css/global/header/header.css" />
    <link rel="stylesheet" href="../../css/global/footer/footer.css" />
    <link rel="stylesheet" href="../../css/global/button/button.css" />
    <link rel="stylesheet" href="../../css/global/index/index.css" />
</head>
<body>
<!-- HEADER -->
<header>
    <a href="./" class="logo">
        <div class="logo">
            <img alt="logo-xilium" src="../../imgs/logos/xilium.svg">
        </div>
    </a>
    <div class="navbar">
        <ul>
            <a href="./dashboard">
                <li>
                    <h1>Tableau de bord</h1>
                </li>
            </a>
            <a href="./faq">
                <li>
                    <h1>Questions Frequentes</h1>
                </li>
            </a>
            <a href="./about">
                <li>
                    <h1>A propos</h1>
                </li>
            </a>

        </ul>
    </div>
    <div class="icons">

        <?php if (isset($_SESSION['id'])) : ?>
            <img src="../../imgs/icons/user.svg" alt="icon user" class="icon" onclick="window.location.href='/account'">
        <?php else : ?>
            <button><a href="./login">Connexion</a></button>
        <?php endif
        ?>


    </div>
</header>