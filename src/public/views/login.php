<?php require 'components/header.php'; ?>

<main>
    <link rel="stylesheet" href="../css/login.css" />
    <div class="box-login">
        <form action="" method="post">
            <div class="login">

                <h1>Connexion</h1>
                <p>Veuillez renseigner vos identifiants de connexion.</p>
                <hr>

                <label for="username"><b>Nom d'utilisateur</b> <span class="required">*</span></label>
                <input type="text" placeholder="Entrez votre nom d'utilisateur" name="username" required id="username">

                <label for="psw"><b>Mot de passe</b> <span class="required">*</span></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="psw" required id="psw">

                <div class="btn-center"><button type="submit" class="btn-primary">Connexion</button></div>
            </div>
            <p> Vous n'avez pas de compte ? <a href="register/">Inscrivez-vous</a></p>
        </form>

    </div>
</main>

<?php require 'components/footer.php'; ?>