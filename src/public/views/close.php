<?php require 'components/header.php'; ?>
    <main>
        <link rel="stylesheet" href="../css/confirm.css">
        <div class="box-confirm">
            <form action="" method="post">
                <p>Êtes-vous sûr de vouloir fermer ce ticket ?</p>
                <div class="btns-confirm">
                    <button class="btn-primary" type="submit" name="response" value='yes'>Oui</button>
                    <button class="btn-secondary" type="submit" name="response" value='no'>Non</button>
                </div>

            </form>
        </div>

    </main>
<?php require 'components/footer.php'; ?>