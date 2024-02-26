<?php require 'components/header.php'; ?>

<main>
    <link rel="stylesheet" href="../css/signup.css">

    <div class="box-su">
        <form>
            <div class="su">

                <h1>Inscription</h1>
                <p>Veuillez renseigner vos informations pour vous inscrire.</p>
                <hr>

                <label for="username"><b>Nom d'utilisateur</b> <span class="required">*</span></label>
                <input type="text" placeholder="Créez votre nom d'utilisateur" name="username" required id="username">

                <label for="lname"><b>Nom</b> <span class="required">*</span></label>
                <input type="text" placeholder="Entrez votre nom" name="lname" required id="lname">

                <label for="fname"><b>Prénom</b> <span class="required">*</span></label>
                <input type="text" placeholder="Entez votre prénom" name="fname" required id="fname">

                <label for="psw"><b>Mot de passe</b> <span class="required">*</span></label>
                <input type="password" placeholder="Créez votre mot de passe" name="psw" required id="psw">

                <label for="psw-repeat"><b>Confirmez votre mot de passe</b> <span class="required">*</span></label>
                <input type="password" placeholder="Confirmez votre mot de passe" name="psw-repeat" required
                       id="psw-repeat">

                <label for="captcha"><b>Captcha</b> <span class="required">*</span></label>
                <p>4*2-7 = ?</p>
                <input type="text" placeholder="Entrez le captcha" name="captcha" required id="captcha">

                <div class="btn-center">
                    <button type="submit" class="btn-primary">Inscription</button>
                </div>
            </div>
            <p> Vous avez déjà un compte ? <a href="../login/">Connectez-vous</a></p>
        </form>

    </div>
</main>

<?php require 'components/footer.php'; ?>