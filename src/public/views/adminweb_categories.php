<?php require 'components/header.php'; ?>

<main>

    <link rel="stylesheet" href="/css/adminweb.css">
    <div class="btns">
        <button class="btn-secondary" onclick="window.location.href='/admin/users';">Gestion des utilisateurs</button>
        <button class="btn-primary" onclick="window.location.href='/admin/labels';">Gestion des labels</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/categories';">Gestion des
            catégories</button>
    </div>

    <div class="gestion-categories">
        <?php foreach ($categories as $category): ?>
            <div class="category">
                <div class="category-main">
                    <div class="category-main-name">
                        <span><?= $category['cat_name'] ?></span>
                    </div>
                    <div class="category-main-color">
                        <span style="background: <?= $category['cat_css_color'] ?>"></span>
                    </div>
                    <div class="category-main-actions">
                        <button class="btn-primary"
                            onclick="window.location.href='/admin/categories/update/<?= $category['cat_id'] ?>'">Modifier</button>
                        <button class="btn-tertiary"
                            onclick="window.location.href='/admin/categories/delete/<?= $category['cat_id'] ?>'">Supprimer</button>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        <button class="btn-primary create-category" onclick="window.location.href='/admin/categories/create'">Créer une
            catégorie</button>

</main>

<?php require 'components/footer.php'; ?>