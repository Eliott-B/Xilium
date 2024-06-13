<?php require 'components/header.php'; ?>

<!-- BODY -->
<main>

<link rel="stylesheet" href="../css/ticket.css">

<span class="back">
        <?php if ($_SESSION['role'] == 10 || $_SESSION['role'] == 50): ?>
            <a href="/techniciens-dashboard"><i class="arrow left"></i>Retour</a>
        <?php else: ?>
            <a href="/dashboard"><i class="arrow left"></i>Retour</a>
        <?php endif ?>
    </span>
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
    
    <div class="ticket-main" id=<?= $ticket['tic_id'] ?>>
            <div class="ticket-main-title">
                <span>
                    <?= $ticket['tic_title'] ?>
                </span>
            </div>
            <div class="ticket-main-author">
                <span>
                    <?= $users['use_firstname'] ?>
                    <?= $users['use_name'] ?>
                </span>
            </div>
            <div class="ticket-main-labels">
                <span class="ticket-category" style="background-color: <?= $category['cat_css_color'] ?>">
                    <?= $category['cat_name'] ?>
                </span>
                <span class="ticket-problem" style="background-color: <?= $label['lab_css_color'] ?>">
                    <?= $label['lab_name'] ?>
                </span>
                <span class="ticket-priority" style="background-color: <?= $priority['pri_css_color'] ?>">
                    <?= $priority['pri_name'] ?>
                </span>
            </div>
            <div class="ticket-main-status" style="background-color: <?= $status['sta_css_color'] ?>">
                <?= $status['sta_name'] ?>
            </div>
            <div class="ticket-main-message">
                <p>
                    <?= $ticket['tic_description'] ?>
                </p>
                <p>
                    <? if ($ticket['tech_id'] !== NULL): ?>
                        <b>Technicien en charge :</b> <?= $tech['use_firstname'] . ' ' . $tech['use_name'] ?>
                    <? endif; ?>
                </p>
            </div>
            <br />
            <div class="ticket-main-actions">
                <?php if ($status['sta_name'] !== "Fermé"): ?>
                    <button class="btn-secondary"
                        onclick="window.location.href='/close/<?= $ticket['tic_id'] ?>'">Fermer</button>&ensp;
                    <button class="btn-primary"
                        onclick="window.location.href='/update/<?= $ticket['tic_id'] ?>'">Modifier</button>
                    <?php if ($ticket['tech_id'] == $_SESSION['id']): ?>
                        <button class="btn-primary"
                            onclick="window.location.href='/update_status/<?= $ticket['tic_id'] ?>'">Modifier le status</button>
                    <?php endif; if (($_SESSION['role'] == 10 ||
                                $_SESSION['role'] == 50) &&
                                $ticket['tech_id'] !== $_SESSION['id']): ?>
                        <button class="btn-tertiary"
                            onclick="window.location.href='/assignation/<?= $ticket['tic_id'] ?>'">Attribuer</button>
                    <?php endif; if (($_SESSION['role'] == 10 ||
                                        $_SESSION['role'] == 50) &&
                                        $ticket['tech_id'] === $_SESSION['id']): ?>
                        <button class="btn-tertiary"
                            onclick="window.location.href='/desassignation/<?= $ticket['tic_id'] ?>'">Désattribuer</button>
                    <?php endif; ?>
                    <button class="btn-tertiary"
                        onclick="comment_ticket(<?= $ticket['tic_id'] ?>, '<?= $ticket['tic_title'] ?>')">
                        Commenter</button>
                <?php endif; ?>
            </div>
            <div class="ticket-main-date">
                <p>
                    <?= date('d/m/Y à H:i', strtotime($ticket['update_date'])) ?>
                </p>
            </div>
        </div>
        <div class='ticket-comments'>
            <?php foreach ($comments as $comment): ?>
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

</main>

<script>
function comment_ticket(ticket_id, title) {
        const dialog = document.getElementById('comment-dialog');
        dialog.showModal();
        dialog.querySelector('#response').textContent = title;
        dialog.querySelector('form').action = '/comment/' + ticket_id;
    }
</script>

<?php require 'components/footer.php'; ?>
