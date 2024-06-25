<?php require 'components/header.php'; ?>

<main>
    <span class="back">
        <a href="/techniciens-dashboard"><i class="arrow left"></i>Retour</a>
    </span>

    <form action="" method="post">
        <label for="tech_id">Technicien : </label>
        <select id="tech_id" name="tech_id">
            <option value="null">Aucun</option>
            <?php foreach ($techs as $tech): ?>
                <option value="<?= $tech['use_id'] ?>"><?= $tech['use_firstname'] . ' ' . $tech['use_name'] ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Attribuer">
    </form>

</main>


<?php require 'components/footer.php'; ?>
