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
        <button class="btn-primary openeds" id='btn-open'>Non attribué</button>
        <button class="btn-primary alocated" id='btn-alocated'>Attribué</button>
        <button class="btn-secondary closeds" id='btn-close'>Clos</button>
    </div>


    <?php $is_0_openeds = sizeof(array_filter($view_tickets, function ($ticket) {
        return $ticket[1]['tech_id'] === null;
    })) == 0;
    // True si aucun ticket n'est ouvert    ?>
    <?php $is_0_closeds = sizeof(array_filter($view_tickets, function ($ticket) {
        return $ticket[1]['status']['sta_name'] === "Fermé" && $ticket[1]['tech_id'] === $_SESSION['id'];
    })) == 0;
    // True si aucun ticket n'est fermé   ?>
    <?php $is_0_alocateds = sizeof(array_filter($view_tickets, function ($ticket) {
        return $ticket[1]['tech_id'] === $_SESSION['id'] && $ticket[1]['status']['sta_name'] !== "Fermé";
    })) == 0;
    // True si aucun ticket n'est attribué   ?>

    <?php if ($is_0_openeds): ?>
        <div class="no-tickets" id="no-openeds-text">
            <div class='center'>
                <p>Il n'y a aucun ticket en cours.</p>
            </div>

        </div>

    <?php endif; ?>
    <?php if ($is_0_closeds): ?>

        <div class="no-tickets" id="no-closeds-text">
            <div class='center'>
                <p>Il n'y a aucun ticket clos.</p>
            </div>
        </div>

    <?php endif; ?>
    <?php if ($is_0_alocateds): ?>

        <div class="no-tickets" id="no-alocated-text">
            <div class='center'>
                <p>Vous n'avez pas de ticket attribué ouvert.</p>
            </div>
        </div>

    <?php endif; ?>

    <?php foreach ($view_tickets as $v_ticket): ?>
        <?php

        

        if ($v_ticket[1]['status']['sta_name'] === "Fermé" && $v_ticket[1]['tech_id'] === $_SESSION['id']) {
            echo "<div class='ticket' id='closed'>";
        } else {
            if ($v_ticket[1]['tech_id'] == $_SESSION['id']) {
                echo "<div class='ticket' id='alocated'>";
            }
            else if ($v_ticket[1]['tech_id'] == "") {
                echo "<div class='ticket' id='opened'>";
            }
            else {
                continue;
            }
        }
        ?>
        <div class="ticket-main" id=<?= $v_ticket[1]['tic_id'] ?>>
            <div class="ticket-main-title">
                <a href="/ticket/<?= $v_ticket[1]['tic_id'] ?>">
                    <?= $v_ticket[1]['tic_title'] ?>
                </a>
            </div>
            <div class="ticket-main-author">
                <span>
                    <?= $v_ticket[0]['use_firstname'] ?>
                    <?= $v_ticket[0]['use_name'] ?>
                </span>
            </div>
            <div class="ticket-main-labels">
                <span class="ticket-category" style="background-color: <?= $v_ticket[1]['category']['cat_css_color'] ?>">
                    <?= $v_ticket[1]['category']['cat_name'] ?>
                </span>
                <span class="ticket-problem" style="background-color: <?= $v_ticket[1]['label']['lab_css_color'] ?>">
                    <?= $v_ticket[1]['label']['lab_name'] ?>
                </span>
                <? if($v_ticket[1]['priority'] !== null): ?>
                    <span class="ticket-priority" style="background-color: <?= $v_ticket[1]['priority']['pri_css_color'] ?>">
                        <?= $v_ticket[1]['priority']['pri_name'] ?>
                    </span>
                <? endif; ?>
            </div>
            <div class="ticket-main-status" style="background-color: <?= $v_ticket[1]['status']['sta_css_color'] ?>">
                <?= $v_ticket[1]['status']['sta_name'] ?>
            </div>
            <div class="ticket-main-message">
                <p>
                    <?= $v_ticket[1]['tic_description'] ?>
                </p>
            </div>
            <br />
            <div class="ticket-main-actions">
                <?php if ($v_ticket[1]['status']['sta_name'] !== "Fermé"): ?>
                    <button class="btn-secondary"
                        onclick="window.location.href='/close/<?= $v_ticket[1]['tic_id'] ?>'">Fermer</button>&ensp;
                    <button class="btn-primary"
                        onclick="window.location.href='/update/<?= $v_ticket[1]['tic_id'] ?>'">Modifier</button>
                    <?php if ($v_ticket[1]['tech_id'] == $_SESSION['id']): ?>
                        <button class="btn-primary"
                            onclick="window.location.href='/update-status/<?= $v_ticket[1]['tic_id'] ?>'">Modifier le status</button>
                    <?php endif; if (($_SESSION['role'] == 10 ||
                                $_SESSION['role'] == 50) &&
                                $v_ticket[1]['tech_id'] !== $_SESSION['id']): ?>
                        <button class="btn-tertiary"
                            onclick="window.location.href='/assignation/<?= $v_ticket[1]['tic_id'] ?>'">Attribuer</button>
                    <?php endif; if (($_SESSION['role'] == 10 ||
                                        $_SESSION['role'] == 50) &&
                                        $v_ticket[1]['tech_id'] === $_SESSION['id']): ?>
                        <button class="btn-tertiary"
                            onclick="window.location.href='/desassignation/<?= $v_ticket[1]['tic_id'] ?>'">Désattribuer</button>
                    <?php endif; ?>
                    <button class="btn-tertiary"
                        onclick="comment_ticket(<?= $v_ticket[1]['tic_id'] ?>, '<?= addslashes($v_ticket[1]['tic_title']) ?>')">
                        Commenter</button>
                <?php endif; ?>
            </div>
            <div class="ticket-main-date">
                <p>
                    <?= date('d/m/Y à H:i', strtotime($v_ticket[1]['update_date'])) ?>
                </p>
            </div>

            <div class="ticket-icon-comments">
                <div id='icon-click'>
                    <span>
                        <?= sizeof($v_ticket[1]['comments']) ?>
                    </span>
                    <img src="../imgs/icons/comments.svg" alt="comments on/off" class="comments-on-off-icon">
                </div>
            </div>
        </div>
        <div class='ticket-comments' style='display:none'>
            <?php foreach ($v_ticket[1]['comments'] as $comment): ?>
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
                document.getElementById('btn-alocated').classList.remove('active');
            }
            else if (filter == 'closeds') {
                document.getElementById('btn-close').classList.add('active');
                document.getElementById('btn-open').classList.remove('active');
                document.getElementById('btn-alocated').classList.remove('active');
            }
            else {
                document.getElementById('btn-alocated').classList.add('active');
                document.getElementById('btn-open').classList.remove('active');
                document.getElementById('btn-close').classList.remove('active');
            }

            tickets.forEach(ticket => {
                ticket.style.display = 'none';
                if (ticket.id === 'opened' && filter === 'openeds') {
                    ticket.style.display = 'block';
                }
                else if (ticket.id === 'closed' && filter === 'closeds') {
                    ticket.style.display = 'block';
                }
                else if (ticket.id === 'alocated' && filter === 'alocated') {
                    ticket.style.display = 'block';
                }
            });

            <?php if ($is_0_openeds): ?>
                document.getElementById('no-openeds-text').style.display = filter === 'openeds' ? 'block' : 'none';
            <?php endif; ?>
            <?php if ($is_0_closeds): ?>
                document.getElementById('no-closeds-text').style.display = filter === 'closeds' ? 'block' : 'none';
            <?php endif; ?>
            <?php if ($is_0_alocateds): ?>
                document.getElementById('no-alocated-text').style.display = filter === 'alocated' ? 'block' : 'none';
            <?php endif; ?>
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