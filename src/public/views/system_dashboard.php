<?php require 'components/header.php'; ?>

<main>
    <link rel="stylesheet" href="../css/system_dashboard.css">
    <section class="section-system-dashboard">
        <div class="details-log">
            <h1>Administrateur système</h1>
            <div class="get-logs">
                <form action="" method="post">
                    <label for="fileSelect">Select a file:</label>
                    <select name="fileSelect" id="fileSelect">
                        <?php foreach ($files as $file) : ?>
                            <option value="<?= $file ?>"><?= $file ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="btn-primary">Charger</button>
                </form>
            </div>
        </div>
        <div class="affichage-log">
            <h1>Logs :</h1>
            <div class="scroll-log">
                <?= $logs_text ?>
            </div>
        </div>
    </section>
    <iframe src="http://localhost:3838" frameborder="0" class="iframe"></iframe>
</main>

<?php require 'components/footer.php'; ?>