<?php require 'components/header.php'; ?>

<main>
    <link rel="stylesheet" href="../css/dashboard.css">
    <div class="btns-selec">
        <button class="btn-primary openeds">En cours</button>
        <button class="btn-secondary closeds">Clos</button>
    </div>
    <?php foreach ($view_tickets as $v_ticket): ?>
        <?php
        if ($v_ticket['status']['sta_name'] === "Fermé") {
            echo "<div class='ticket' id='closed'>";
        } else {
            echo "<div class='ticket' id='opened'>";
        }
        ?>
        <div class="ticket-main" id=<?= $v_ticket['tic_id'] ?>>
            <div class="ticket-main-title">
                <span>
                    <?= $v_ticket['tic_title'] ?>
                </span>
            </div>
            <div class="ticket-main-author">
                <span>
                    <?= $users['use_firstname'] ?>
                    <?= $users['use_name'] ?>
                </span>
            </div>
            <div class="ticket-main-labels">
                <span class="ticket-category" style="background-color: <?= $v_ticket['category']['cat_css_color'] ?>">
                    <?= $v_ticket['category']['cat_name'] ?>
                </span>
                <span class="ticket-problem" style="background-color: <?= $v_ticket['label']['lab_css_color'] ?>">
                    <?= $v_ticket['label']['lab_name'] ?>
                </span>
                <span class="ticket-priority" style="background-color: <?= $v_ticket['priority']['pri_css_color'] ?>">
                    <?= $v_ticket['priority']['pri_name'] ?>
                </span>
            </div>
            <div class="ticket-main-status" style="background-color: <?= $v_ticket['status']['sta_css_color'] ?>">
                <?= $v_ticket['status']['sta_name'] ?>
            </div>
            <div class="ticket-main-message">
                <p>
                    <?= $v_ticket['tic_description'] ?>
                </p>
            </div>
            <!-- TODO -->
            <div class="ticket-main-actions">
                <!--                <button class="btn-primary">Commenter</button>-->
                <button class="btn-primary" onclick="window.location.href='/update/<?= $v_ticket['tic_id'] ?>'">Modifier</button>
                <button class="btn-tertiary" onclick="window.location.href='/close/<?= $v_ticket['tic_id'] ?>'">Fermer</button>
                <!--                <button class="btn-secondary">Supprimer</button>-->
            </div>
            <div class="ticket-main-date">
                <p>
                    <?= $v_ticket['update_date'] ?>
                </p>
            </div>
            <!-- TODO -->
            <!-- <div class="ticket-icon-comments">
                <img src="../imgs/icons/comments_off.svg" alt="comments off" class="comments-off-icon">
            </div> -->
        </div>
        </div>
    <?php endforeach; ?>
    <div class="add-ticket">
        <button class="btn-icon"><img src="../imgs/icons/add.svg" alt="add" class="add-icon"
                onclick="window.location.href='./create';"></button>
    </div>
</main>

<script>
    // Permets de filtrer les tickets ouverts et fermés
    const btns = document.querySelectorAll('.btns-selec button');
    const tickets = document.querySelectorAll('.ticket');

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.classList[1];

            tickets.forEach(ticket => {
                ticket.style.display = 'none';
                if (ticket.id === 'opened' && filter === 'openeds') {
                    console.log(ticket);
                    ticket.style.display = 'block';
                }
                else if (ticket.id === 'closed' && filter === 'closeds') {
                    console.log(ticket);
                    ticket.style.display = 'block';
                }
            });
        });
    });

    btns[0].click();
</script>

<?php require 'components/footer.php'; ?>