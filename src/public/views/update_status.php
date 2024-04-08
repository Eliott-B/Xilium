<?php require 'components/header.php'; ?>
<main>
    <link rel="stylesheet" href="../css/create.css">
    <span class="back">
        <a href="/dashboard"><i class="arrow left"></i>Retour</a>
    </span>
    <div class="box-new-ticket">
        <form action="" method="post">
            <div class="new-ticket">
                <h1>Modifier le status d'un ticket</h1>
                <p>Veuillez modifier le status pour du ticket.</p>
                <hr>

                <label for="status"><b>Status</b> <span class="required">*</span></label>
                <select id="status" name="status">

                    <option disabled selected>Status</option>
                    <?php foreach ($statuses as $stat): ?>
                        <option value="<?= $stat['sta_id'] ?>" <?= ($ticket['status_id'] == $stat['sta_id']) ? "selected" : "" ?>>
                            <?= $stat['sta_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <div class="btn-center">
                    <button type="submit" class="btn-primary">Modifier le status</button>
                </div>
            </div>

        </form>
    </div>

</main>
<?php require 'components/footer.php'; ?>