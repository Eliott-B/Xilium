<?php require 'components/header.php'; ?>

<main>

    <link rel="stylesheet" href="/css/adminweb.css">
    <div class="btns">
        <button class="btn-secondary" onclick="window.location.href='/admin/users';">Gestion des utilisateurs</button>
        <button class="btn-primary" onclick="window.location.href='/admin/labels';">Gestion des labels</button>
        <button class="btn-secondary" onclick="window.location.href='/admin/categories';">Gestion des
            catégories</button>
    </div>

    <div class="gestion-labels">
        <?php foreach ($labels as $label): ?>
            <div class="label">
                <div class="label-main">
                    <div class="label-main-name">
                        <span><?= $label['lab_name'] ?></span>
                    </div>
                    <div class="label-main-color">
                        <span style="background: <?= $label['lab_css_color'] ?>"></span>
                    </div>
                    <div class="label-main-actions">
                        <button class="btn-primary"
                            onclick="window.location.href='/admin/labels/update/<?= $label['lab_id'] ?>'">Modifier</button>
                        <button class="btn-tertiary"
                            onclick="window.location.href='/admin/labels/delete/<?= $label['lab_id'] ?>'">Supprimer</button>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        <button class="btn-primary create-label" onclick="window.location.href='/admin/labels/create'">Créer un
            label</button>
    </div>

</main>

<?php require 'components/footer.php'; ?>