<?php require 'components/header.php'; ?>

    <!-- BODY -->
    <main>

        <div style="text-align: center;">
            <iframe src=""
                    width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                    allowfullscreen></iframe>
            <p>Guide de présentation</p>
            <button class="btn-secondary" onclick="window.location.href='./dashboard'">Mes tickets</button>
        </div>


        <div class="create-ticket">
            <?php if (isset($_SESSION['id'])) : ?>
                <button class="btn-primary" onclick="window.location.href='./create'">Nouveau ticket</button>
            <?php else : ?>
                <button class="btn-primary" onclick="window.location.href='./login'">Connexion</button>
            <?php endif ?>
        </div>
        
        <section class="box-tickets">
            <div class="tickets-title">
                <h2>Tickets en cours dans Xilium</h2>
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