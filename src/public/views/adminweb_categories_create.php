<?php require 'components/header.php'; ?>

<main>

    <link rel="stylesheet" href="/css/adminweb.css">
    <div class="btns">
        <button class="btn-secondary" onclick="window.location.href='/admin/users';">Gestion des utilisateurs</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/labels';">Gestion des labels</button>
        <button class="btn-primary" onclick="window.location.href='/admin/categories';">Gestion des catégories</button>
    </div>

    <div class="create-categories">
        <div class="create-categories-frame">
            <form action="/admin/categories/create" method="post" class="create-categories-form">
                <div class="create-categories-main">
                    <div class="create-categories-main-name">
                        <label for="cat_name">Nom de la catégorie</label>
                        <input type="text" name="cat_name" id="cat_name">
                    </div>
                    <div class="create-categories-main-color">
                        <label for="cat_css_color">Couleur</label>
                        <input type="color" name="cat_css_color" id="cat_css_color">
                    </div>
                </div>
                <div class="create-categories-form-actions">
                    <button class="btn-primary" type="submit">Créer</button>
                </div>
            </form>
        </div>

</main>

<?php require 'components/footer.php'; ?>