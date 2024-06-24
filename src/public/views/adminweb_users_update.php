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

    <div class="update-user-frame">
        <form action="/admin/users/update/<?= $user['use_id'] ?>" method="post" class="update-user-form">
            <div class="update-user-main">
                <div class="update-user-main-username">
                    <label for="use_username">Nom d'utilisateur</label>
                    <input type="text" name="use_username" id="use_email" value="<?= $user['use_username'] ?>">
                </div>
                <div class="update-user-main-name">
                    <label for="use_firstname">Prénom</label>
                    <input type="text" name="use_firstname" id="use_firstname" value="<?= $user['use_firstname'] ?>">
                </div>
                <div class="update-user-main-name">
                    <label for="use_name">Nom</label>
                    <input type="text" name="use_name" id="use_name" value="<?= $user['use_name'] ?>">
                </div>
                <div class="update-user-main-role">
                    <label for="role_id">Rôle</label>
                    <select name="role_id" id="role_id">
                        <?php foreach ($roles as $role): ?>
                            <option value="<?= $role['rol_id'] ?>" <?php if ($role['rol_id'] == $user['role_id']) {
                                echo "selected";
                            } ?>><?= $role['rol_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="update-user-form-actions">
                <button class="btn-primary" type="submit">Modifier</button>
                <button class="btn-tertiary" onclick="window.location.href='/admin/users/delete/<?= $user['use_id'] ?>'">Supprimer</button>
            </div>
        </form>
    </div>
</main>

<?php require 'components/footer.php'; ?>
