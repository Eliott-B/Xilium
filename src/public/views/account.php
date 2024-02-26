<?php require 'components/header.php'; ?>

<main>

    <link rel="stylesheet" href="../css/account.css"/>
    <div class="name">
        <h1>Fabrice Hoguin</h1>
    </div>
    <div class="role">Administrateur système</div>
    <div class="box-changepass">
        <form>
            <h1>Modifier son mot de passe</h1>
            <hr>

            <label for="old-psw"><b>Mot de passe actuel</b> <span class="required">*</span></label>
            <input type="text" placeholder="Mot de passe actuel" name="old-psw" required id="old-psw">

            <label for="psw"><b>Nouveau mot de passe</b> <span class="required">*</span></label>
            <input type="password" placeholder="Entrez votre nouveau mot de passe" name="psw" required id="psw">
            <label for="psw-repeat"><b>Confirmer le mot de passe</b> <span class="required">*</span></label>
            <input type="password" placeholder="Confirmer le mot de passe" name="psw-repeat" required id="psw-repeat">
            <div class="btn-center">
                <button type="submit" class="btn-primary">Valider</button>
            </div>
        </form>
    </div>
    <div class="admin-link">
        <a href="../admin/">Accéder à l'interface administrateur/technicien</a>
    </div>
    <div class="logout">
        <button class="btn-primary" onclick="window.location.href='../logout/';">Déconnexion</button>
    </div>

</main>

<?php require 'components/footer.php'; ?>
