<?php require 'components/header.php'; ?>

<!-- BODY -->
<main>

    <div style="text-align: center;">
        <iframe src=""
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
        <p>Guide de présentation</p>
    </div>


    <div class="create-ticket">
        <button class="btn-primary" onclick="window.location.href='./ticket/create'">Nouveau ticket</button>
    </div>

    <section class="box-tickets">
        <div class="tickets-title">
            <h2><a href="./dashboard">Mes tickets en cours</a></h2>
        </div>
        <div class="list-tickets">
            <?php foreach ($tickets as $ticket): ?>

            <div class="ticket" onclick="window.location.href='./ticket/<?= $ticket['tic_id'] ?>';">
                <h3 class="ticket-title"><?= $ticket['tic_title'] ?></h3>
                <p class="ticket-content"><?= $ticket['tic_description'] ?></p>
            </div>

            <?php endforeach ?>

        </div>
    </section>
</main>


<?php require 'components/footer.php'; ?>