<?php require 'components/header.php'; ?>

<!-- BODY -->
<main>
    <div class="first-box">
        <div class="video">
            <iframe src="../video/presentation.mp4" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>
            <p>Guide de présentation</p>
        </div>

        <div class="content">
            <p>
                Xilium : Votre solution de ticketing interne<br>
                Bienvenue sur Xilium, la plateforme de ticketing dédiée à notre Institut Universitaire de Technologie (IUT). Conçue pour simplifier la vie de tous les utilisateurs, qu'ils soient étudiants ou professeurs, Xilium est votre allié pour résoudre rapidement et efficacement tous vos problèmes techniques.<br>
                Avec Xilium, fini les longues attentes et les procédures complexes pour joindre le service technique. Il vous suffit de créer un ticket en quelques clics, en décrivant précisément votre problème. Une fois votre ticket envoyé, notre équipe de techniciens qualifiés prendra en charge votre demande dans les plus brefs délais.<br>
                Xilium vous permet également de suivre l'avancement de votre ticket en temps réel, et d'échanger avec les techniciens si besoin. Plus besoin de relancer constamment le service technique : vous êtes informé à chaque étape de la résolution de votre problème.<br>
                En plus de faciliter la résolution des problèmes techniques, Xilium contribue à améliorer la qualité de nos services. Grâce aux statistiques générées par la plateforme, nous pouvons identifier les problèmes récurrents et mettre en place des actions préventives pour les éviter à l'avenir.
            </p>
            <?php if (isset($_SESSION['id']) && $_SESSION['role'] != 100): ?>
                <button class="btn-primary" onclick="window.location.href='./dashboard'">Mes tickets</button>
            <?php elseif (isset($_SESSION['id']) && $_SESSION['role'] != 100): ?>
                <button class="btn-primary" onclick="window.location.href='./login'">Se connecter</button>
                <p class="register">Vous n'avez pas de compte ? <a href="./register">Inscrivez-vous</a></p>
            <?php endif ?>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
        <path fill="#0099ff" fill-opacity="1"
            d="M0,64L40,90.7C80,117,160,171,240,170.7C320,171,400,117,480,112C560,107,640,149,720,176C800,203,880,213,960,213.3C1040,213,1120,203,1200,170.7C1280,139,1360,85,1400,58.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>

    <?php if ($_SESSION['role'] != 100): ?>
    <section class="table-tickets">
        <h2>Tickets en cours dans Xilium</h2>
        <table>
            <tr>
                <th>Titre</th>
                <th>Description</th>
            </tr>
            <?php foreach ($tickets as $ticket): ?>
                <tr>
                    <td>
                        <?= $ticket['tic_title'] ?>
                    </td>
                    <td>
                        <?= $ticket['tic_description'] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </section>
    <?php endif ?>
</main>


<?php require 'components/footer.php'; ?>