<?php require 'components/header.php'; ?>

<main>

    <link rel="stylesheet" href="/css/adminweb.css">
    <div class="btns">
        <button class="btn-secondary" onclick="window.location.href='/admin/users';">Gestion des utilisateurs</button>
        <button class="btn-primary" onclick="window.location.href='/admin/labels';">Gestion des labels</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/categories';">Gestion des
            catégories</button>
    </div>

    <div class="create-labels">
        <div class="create-labels-frame">
            <form action="/admin/labels/create" method="post" class="create-labels-form">
                <div class="create-labels-main">
                    <div class="create-labels-main-name">
                        <label for="lab_name">Nom du label</label>
                        <input type="text" name="lab_name" id="lab_name">
                    </div>
                    <div class="create-labels-main-color">
                        <label for="lab_css_color">Couleur</label>
                        <input type="color" name="lab_css_color" id="lab_css_color">
                    </div>
                </div>
                <div class="create-labels-form-actions">
                    <button class="btn-primary" type="submit">Créer</button>
                </div>
            </form>
        </div>
    </div>

</main>

<?php require 'components/footer.php'; ?>