<?php require 'components/header.php'; ?>

<main>
    <link rel="stylesheet" href="/css/adminweb.css">
    <div class="btns">
        <button class="btn-secondary" onclick="window.location.href='/admin/users';"
        >Gestion des utilisateurs</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/labels';"
        >Gestion des labels</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/categories';"
        >Gestion des catégories</button>
    </div>
</main>

<?php require 'components/footer.php'; ?>
