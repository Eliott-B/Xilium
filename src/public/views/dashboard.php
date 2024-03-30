<?php require 'components/header.php'; ?>

<main>
    <link rel="stylesheet" href="../css/dashboard.css">
    <dialog id='comment-dialog'>
        <form action="" method="post">
            <h1>Commentaire</h1>
            <p id="response"></p>
            <hr>
            <label for="title"><b>Titre</b> <span class="required">*</span></label>
            <input type="text" name="title" id="title" placeholder="Titre" required>
            <label for="comment"><b>Commentaire</b> <span class="required">*</span></label>
            <textarea name="comment" id="comment" placeholder="Commentaire" required></textarea>
            <div class="btn-center"><button type="submit" class="btn-primary">Commenter</button></div>
    </dialog>
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
            <br />
            <!-- TODO -->
            <div class="ticket-main-actions">
                <?php if ($v_ticket['status']['sta_name'] !== "Fermé"): ?>
                    <button class="btn-secondary"
                        onclick="window.location.href='/close/<?= $v_ticket['tic_id'] ?>'">Fermer</button>&ensp;
                    <button class="btn-primary"
                        onclick="window.location.href='/update/<?= $v_ticket['tic_id'] ?>'">Modifier</button>
                    <button class="btn-tertiary"
                        onclick="comment_ticket(<?= $v_ticket['tic_id'] ?>, '<?= $v_ticket['tic_title'] ?>')">
                        Commenter</button>
                <?php endif; ?>
                <!--                <button class="btn-secondary">Supprimer</button>-->
            </div>
            <div class="ticket-main-date">
                <p>
                    <?= date('d/m/Y à H:i', strtotime($v_ticket['update_date'])) ?>
                </p>
            </div>

            <div class="ticket-icon-comments">
                <img src="../imgs/icons/comments.svg" alt="comments on/off" class="comments-on-off-icon">
            </div>
            <?php if ($v_ticket['comments']): ?>
            <?php endif; ?>
        </div>
        <!-- TODO -->
        <div class='ticket-comments' style='display:none'>
            <?php foreach ($v_ticket['comments'] as $comment): ?>
                <div class='comment'>
                    <div class='comment-title'>
                        <span>
                            <?= $comment['com_title'] ?>
                        </span>
                    </div>
                    <div class='comment-author'>
                        <span>
                            <?= $comment['user']['use_firstname'] . ' ' . $comment['user']['use_name'] ?>
                        </span>
                    </div>
                    <div class='comment-message'>
                        <p>
                            <?= $comment['com_comment'] ?>
                        </p>
                    </div>
                    <div class='comment-date'>
                        <p>
                            <?= date('d/m/Y à H:i', strtotime($comment['com_date'])) ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        </div>

    <?php endforeach; ?>
    <div class="add-ticket" onclick="window.location.href='./create';">
        <button class="btn-icon"><img src="../imgs/icons/add.svg" alt="add" class="add-icon"></button>
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

    // Permets d'afficher les commentaires

    tickets.forEach(ticket => {
        const comments_icon = ticket.querySelector('.ticket-icon-comments');
        const ticketComments = ticket.querySelector('.ticket-comments');
        if (ticketComments.children.length == 0) {
            comments_icon.style.display = 'none';

        }

        comments_icon.addEventListener('click', () => {
            ticketComments.style.display = ticketComments.style.display === 'none' ? 'block' : 'none';
            comments_icon.querySelector('.comments-on-off-icon').src = ticketComments.style.display === 'none' ? '../imgs/icons/comments.svg' : '../imgs/icons/comments_off.svg';
        });
    });

    // Permets d'afficher le dialogue de commentaire

    function comment_ticket(ticket_id, title) {
        const dialog = document.getElementById('comment-dialog');
        dialog.showModal();
        dialog.querySelector('#response').textContent = title;
        dialog.querySelector('form').action = '/comment/' + ticket_id;
    }

</script>

<?php require 'components/footer.php'; ?>