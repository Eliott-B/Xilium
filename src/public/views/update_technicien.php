<?php require 'components/header.php'; ?>
<main>
    <link rel="stylesheet" href="../css/create.css">
    <span class="back">
        <a href="/techniciens-dashboard"><i class="arrow left"></i>Retour</a>
    </span>
    <div class="box-new-ticket">
        <form action="" method="post">
            <div class="new-ticket">
                <h1>Modifier un ticket</h1>
                <p>Veuillez modifier les informations pour votre ticket.</p>
                <hr>

                <label for="category"><b>Catégorie</b> <span class="required">*</span></label>
                <select id="category" name="category">

                    <option disabled selected>Catégorie</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['cat_id'] ?>" <?= ($ticket['category_id'] == $category['cat_id']) ? "selected" : "" ?>>
                            <?= $category['cat_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <label for="problem"><b>Problème</b> <span class="required">*</span></label>
                <select id="problem" name="problem">
                    <option disabled selected>Problème</option>
                    <?php foreach ($labels as $label): ?>
                        <option value="<?= $label['lab_id'] ?>" <?= ($ticket['label_id'] == $label['lab_id']) ? "selected" : "" ?>>
                            <?= $label['lab_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <label for="priority"><b>Niveau d'urgence estimé</b></label>
                <select id="priority" name="priority">
                    <option disabled selected>Niveau d'urgence</option>
                    <?php foreach ($priorities as $priority): ?>
                        <option value="<?= $priority['pri_id'] ?>" <?= ($ticket['priority_id'] == $priority['pri_id']) ? "selected" : "" ?>>
                            <?= $priority['pri_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <div class="btn-center">
                    <button type="submit" class="btn-primary">Modifier le ticket</button>
                </div>
            </div>

        </form>
    </div>

</main>
<?php require 'components/footer.php'; ?>