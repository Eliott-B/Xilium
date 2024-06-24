<?php require 'components/header.php'; ?>

<main>

    <link rel="stylesheet" href="/css/adminweb.css">
    <div class="btns">
        <button class="btn-primary" onclick="window.location.href='/admin/users';"
        >Gestion des utilisateurs</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/labels';"
        >Gestion des labels</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/categories';"
        >Gestion des catégories</button>
    </div>

    <div class="create-user-frame">
        <form action="/admin/users/create" method="post" class="create-user-form">
            <div class="create-user-main">
                <div class="create-user-main-username">
                    <label for="use_username">Nom d'utilisateur</label>
                    <input type="text" name="use_username" id="use_email">
                </div>
                <div class="create-user-main-name">
                    <label for="use_firstname">Prénom</label>
                    <input type="text" name="use_firstname" id="use_firstname">
                </div>
                <div class="create-user-main-name">
                    <label for="use_name">Nom</label>
                    <input type="text" name="use_name" id="use_name">
                </div>
                <div class="create-user-main-role">
                    <label for="role_id">Rôle</label>
                    <select name="role_id" id="role_id">
                        <?php foreach ($roles as $role): ?>
                            <option value="<?= $role['rol_id'] ?>"><?= $role['rol_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="create-user-main-password">
                    <label for="use_password">Mot de passe</label>
                    <input type="password" name="use_password" id="use_password">
                    <label for="use_password_confirm">Confirmez le mot de passe</label>
                    <input type="password" name="use_password_confirm" id="use_password_confirm">
                </div>
            </div>
            <div class="create-user-form-actions">
                <button class="btn-primary" type="submit">Créer</button>
            </div>
        </form>
</main>

<?php require 'components/footer.php'; ?>
