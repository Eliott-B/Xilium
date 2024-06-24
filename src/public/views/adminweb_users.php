<?php require 'components/header.php'; ?>

<main>

    <link rel="stylesheet" href="../css/adminweb.css">
    <div class="btns">
        <button class="btn-primary" onclick="window.location.href='/admin/users';"
        >Gestion des utilisateurs</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/labels';"
        >Gestion des labels</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/categories';"
        >Gestion des catégories</button>
    </div>

    <div class="gestion-users">
        <?php foreach ($users as $user): ?>
            <div class="user">
                <div class="user-main">
                    <div class="user-main-name">
                        <span><?= $user['use_firstname'] ?> <?= $user['use_name'] ?></span>
                    </div>
                    <div class="user-main-role">
                        <?php foreach ($roles as $role): ?>
                            <?php if ($role['rol_id'] == $user['role_id']): ?>
                                <span><?= $role['rol_name'] ?></span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="user-main-actions">
                        <button class="btn-primary" onclick="window.location.href='/admin/users/update/<?= $user['use_id'] ?>'">Modifier</button>
                        <button class="btn-tertiary" onclick="window.location.href='/admin/users/delete/<?= $user['use_id'] ?>'">Supprimer</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <button class="btn-primary create-user" onclick="window.location.href='/admin/users/create'">Créer un utilisateur</button>
    </div>
</main>

<?php require 'components/footer.php'; ?>
