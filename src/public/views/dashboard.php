<?php require 'components/header.php'; ?>

<main>
    <link rel="stylesheet" href="../css/dashboard.css">
    <dialog id='comment-dialog'>
        <form action="" method="post">
            <div class="modal-close" onclick="document.getElementById('comment-dialog').close();">
                <img src="../imgs/icons/close.svg" alt="close" class="close-icon">
            </div>
            <h1>Commentaire</h1>
            <p id="response"></p>
            <hr>
            <label for="title"><b>Titre</b> <span class="required">*</span></label>
            <input type="text" name="title" id="title" placeholder="Titre" required>
            <label for="comment"><b>Commentaire</b> <span class="required">*</span></label>
            <textarea name="comment" id="comment" placeholder="Commentaire" required></textarea>
            <div class="btn-center"><button type="submit" class="btn-primary">Commenter</button></div>
        </form>
    </dialog>
    <div class="btns-selec">
        <button class="btn-primary openeds" id='btn-open'>En cours</button>
        <button class="btn-secondary closeds" id='btn-close'>Clos</button>
    </div>


    <?php $is_0_openeds = sizeof(array_filter($view_tickets, function ($ticket) {
        return $ticket['status']['sta_name'] !== "Fermé";
    })) == 0;
    // True si aucun ticket n'est ouvert    ?>
    <?php $is_0_closeds = sizeof(array_filter($view_tickets, function ($ticket) {
        return $ticket['status']['sta_name'] === "Fermé";
    })) == 0;
    // True si aucun ticket n'est fermé   ?>

    <?php if ($is_0_openeds): ?>
        <div class="no-tickets" id="no-openeds-text">
            <div class='center'>
                <p>Vous n'avez aucun ticket en cours.</p>
                <button class="btn-icon" onclick="window.location.href='./create';">Ajouter un ticket</button>
            </div>

        </div>

    <?php endif; ?>
    <?php if ($is_0_closeds): ?>

        <div class="no-tickets" id="no-closeds-text">
            <div class='center'>
                <p>Vous n'avez aucun ticket clos.</p>
            </div>
        </div>

    <?php endif; ?>

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
                <a href="/ticket/<?= $v_ticket['tic_id'] ?>">
                    <?= $v_ticket['tic_title'] ?>
                </a>
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
            <div class="ticket-main-actions">
                <?php if ($v_ticket['status']['sta_name'] !== "Fermé"): ?>
                    <button class="btn-secondary"
                        onclick="window.location.href='/close/<?= $v_ticket['tic_id'] ?>'">Fermer</button>&ensp;
                    <button class="btn-primary"
                        onclick="window.location.href='/update/<?= $v_ticket['tic_id'] ?>'">Modifier</button>
                    <button class="btn-tertiary"
                        onclick="comment_ticket(<?= $v_ticket['tic_id'] ?>, '<?= addslashes($v_ticket['tic_title']) ?>')">
                        Commenter</button>
                <?php endif; ?>
            </div>
            <div class="ticket-main-date">
                <p>
                    <?= date('d/m/Y à H:i', strtotime($v_ticket['update_date'])) ?>
                </p>
            </div>

            <div class="ticket-icon-comments">
                <div id='icon-click'>
                    <span>
                        <?= sizeof($v_ticket['comments']) ?>
                    </span>
                    <img src="../imgs/icons/comments.svg" alt="comments on/off" class="comments-on-off-icon">
                </div>
            </div>
        </div>
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

            if (filter == 'openeds') {
                document.getElementById('btn-open').classList.add('active');
                document.getElementById('btn-close').classList.remove('active');
            }
            else {
                document.getElementById('btn-close').classList.add('active');
                document.getElementById('btn-open').classList.remove('active');
            }

            tickets.forEach(ticket => {
                ticket.style.display = 'none';
                if (ticket.id === 'opened' && filter === 'openeds') {
                    ticket.style.display = 'block';
                }
                else if (ticket.id === 'closed' && filter === 'closeds') {
                    ticket.style.display = 'block';
                }
            });

            if (filter === 'openeds') {
                <?php if ($is_0_openeds): ?>
                    document.getElementById('no-openeds-text').style.display = 'block';
                <?php endif; ?>
                <?php if ($is_0_closeds): ?>
                    document.getElementById('no-closeds-text').style.display = 'none';
                <?php endif; ?>
            }
            if (filter === 'closeds') {
                <?php if ($is_0_openeds): ?>
                    document.getElementById('no-openeds-text').style.display = 'none';
                <?php endif; ?>
                <?php if ($is_0_closeds): ?>
                    document.getElementById('no-closeds-text').style.display = 'block';
                <?php endif; ?>
            }
        });
    });

    btns[0].click();

    // Permets d'afficher les commentaires

    tickets.forEach(ticket => {
        const comments_icon = ticket.querySelector('#icon-click');
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