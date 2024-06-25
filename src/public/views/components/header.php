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
        <a href="/" class="logo">
            <div class="logo">
                <img alt="logo-xilium" src="../../imgs/logos/white_text.svg">
            </div>
        </a>
        <div class="navbar">
            <ul>
                <?php
                $header_arrays = [
                    ['Accueil', '/', true],
                    ['Tableau de bord', '/dashboard', isset($_SESSION['id'])],
                    ['Techniciens', '/techniciens-dashboard', isset($_SESSION['id']) && ($_SESSION['role'] == 10 || $_SESSION['role'] == 50)]
                ];
                <li>
                    <a href="/">
                        <h1>Accueil</h1>
                    </a>
                </li>

                <?php if (isset ($_SESSION['id']) && $_SESSION['role'] != 100): ?>

                    <li>
                        <a href="/dashboard">
                            <h1>Tableau de bord</h1>
                        </a>
                    </li>

                    <?php if ($_SESSION['role'] == 10 || $_SESSION['role'] == 50): ?>
                        <li>
                            <a href="/techniciens-dashboard">
                                <h1>Techniciens</h1>
                            </a>
                        </li>
                    <?php endif ?>

                    <!-- <li>
                        <a href="/account">
                            <h1>Mon compte</h1>
                        </a>
                    </li> -->
                    </a>
                <?php endif ?>
                <?php if (isset ($_SESSION['id']) && $_SESSION['role'] == 100): ?>
                    <li>
                        <a href="/system-dashboard">
                            <h1>Administrateur système</h1>
                        </a>
                    </li>
                <?php endif ?>
                foreach ($header_arrays as $header_array) {
                    if ($header_array[2]) {
                        echo "<li><a";
                        if ($_SERVER['REQUEST_URI'] == $header_array[1]) {
                            echo " class='active'";
                        }
                        echo " href='$header_array[1]'><h1>$header_array[0]</h1></a></li>";
                    }
                }
                ?>
            </ul>
        </div>
        <div class="icons">
            <?php if (isset($_SESSION['id'])): ?>
                <img src="../../imgs/icons/user.svg" alt="icon user" class="icon" onclick="window.location.href='/account'">
            <?php else: ?>
                <button><a href="./login">Connexion</a></button>
            <?php endif ?>
        </div>
    </header>
    <!-- Open main classs -->
    <div class='flex-wrapper'>
        <?php if (isset($_SESSION['error']) && $_SESSION['error'] != ""): ?>
            <div class="error">
                <p>
                    <img src="../../imgs/icons/error.svg" alt="error" class="icon">
                        <strong>Erreur</strong> : <?= $_SESSION['error'] ?>
                </p>
            </div>
        <?php endif ?>
        <?php if (isset($_SESSION['success']) && $_SESSION['success'] != ""): ?>
            <div class="success">
                <p>
                    <img src="../../imgs/icons/success.svg" alt="success" class="icon">
                        <?= $_SESSION['success'] ?>
                </p>
            </div>
        <?php endif ?>

