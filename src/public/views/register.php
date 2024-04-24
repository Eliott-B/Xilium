<?php require 'components/header.php'; ?>

<main>
    <link rel="stylesheet" href="../css/signup.css">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="../js/register.js"></script>

    <div class="box-su">
        <form action="" method="post">
            <div class="su">

                <h1>Inscription</h1>
                <p>Veuillez renseigner vos informations pour vous inscrire.</p>
                <hr>

                <label for="username"><b>Nom d'utilisateur</b> <span class="required">*</span></label>
                <input type="text" placeholder="Créez votre nom d'utilisateur" name="username" required id="username" autocomplete="username">

                <label for="lname"><b>Nom</b> <span class="required">*</span></label>
                <input type="text" placeholder="Entrez votre nom" name="lname" required id="lname" autocomplete="family-name">

                <label for="fname"><b>Prénom</b> <span class="required">*</span></label>
                <input type="text" placeholder="Entez votre prénom" name="fname" required id="fname" autocomplete="given-name">

                <label for="psw"><b>Mot de passe</b> <span class="required">*</span></label>
                <input type="password" placeholder="Créez votre mot de passe" name="psw" required id="psw" onchange="maj()" autocomplete="new-password">

                <label for="psw-repeat"><b>Confirmez votre mot de passe</b> <span class="required">*</span></label>
                <input type="password" placeholder="Confirmez votre mot de passe" name="psw-repeat" required
                       id="psw-repeat" onchange="maj()"  autocomplete="new-password">

                <label for="captcha"><b>Captcha</b> <span class="required">*</span></label>
                <p>\(<?= $expr ?> = ?\)</p>
                <input type="number" placeholder="Entrez le captcha" name="captcha" required id="captcha" onchange="maj()">

                <input type="hidden" value="<?= $expr_res ?>" id="cap-res">
                <p id="message"></p>
                <div class="btn-center">

                    <button type="submit" class="btn-primary" id="register">Inscription</button>
                </div>
            </div>
            <p> Vous avez déjà un compte ? <a href="/login">Connectez-vous</a></p>
        </form>

    </div>
</main>

<?php require 'components/footer.php'; ?>