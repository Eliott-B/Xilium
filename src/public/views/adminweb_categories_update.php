<?php require 'components/header.php'; ?>

<main>

    <link rel="stylesheet" href="/css/adminweb.css">
    <div class="btns">
        <button class="btn-secondary" onclick="window.location.href='/admin/users';">Gestion des utilisateurs</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/labels';">Gestion des labels</button>
        <button class="btn-primary" onclick="window.location.href='/admin/categories';">Gestion des catégories</button>
    </div>

    <div class="update-categories">
        <div class="update-categories-frame">
            <form action="/admin/categories/update/<?= $category['cat_id'] ?>" method="post"
                class="update-categories-form">
                <div class="update-categories-main">
                    <div class="update-categories-main-name">
                        <label for="cat_name">Nom de la catégorie</label>
                        <input type="text" name="cat_name" id="cat_name" value="<?= $category['cat_name'] ?>">
                    </div>
                    <div class="update-categories-main-color">
                        <label for="cat_css_color">Couleur</label>
                        <input type="color" name="cat_css_color" id="cat_css_color"
                            value="<?= $category['cat_css_color'] ?>">
                    </div>
                </div>
                <div class="update-categories-form-actions">
                    <button class="btn-primary" type="submit">Modifier</button>
                </div>
            </form>
        </div>

</main>

<?php require 'components/footer.php'; ?>