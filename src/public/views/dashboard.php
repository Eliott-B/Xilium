<?php require 'components/header.php'; ?>


<main>
    <link rel="stylesheet" href="../css/dashboard.css">
    <div class="btns-selec">
        <button class="btn-primary" onclick="document.getElementById('opened').scrollIntoView();">En cours</button>
        <button class="btn-secondary" onclick="document.getElementById('closed').scrollIntoView();">Clos</button>
    </div>
    <?php foreach ($tickets as $ticket): ?>

    <div class="ticket" id="opened">
        <div class="ticket-main" id="ticket1">
            <div class="ticket-main-title">
                <span><?= $ticket['tic_title'] ?></span>
            </div>
            <div class="ticket-main-author">
                <span><?= $ticket['author_id'] ?></span>
            </div>
            <div class="ticket-main-labels">
                <span class="ticket-category bug">Bug</span>
                <span class="ticket-problem">Compte</span>
                <span class="ticket-priority medium">Moyen</span>
            </div>
            <div class="ticket-main-status open">
                Ouvert
            </div>
            <div class="ticket-main-message">
                <p><?= $ticket['tic_description'] ?></p>
            </div>
            <div class="ticket-main-actions">
                <button class="btn-primary">Commenter</button>
                <button class="btn-primary">Modifier</button>
                <button class="btn-tertiary">Fermer</button>
                <button class="btn-secondary">Supprimer</button>
            </div>
            <div class="ticket-main-date">
                <p>12/12/2024</p>
            </div>
            <div class="ticket-icon-comments">
                <img src="../imgs/icons/comments_off.svg" alt="comments off" class="comments-off-icon">
            </div>
        </div>

    <?php endforeach; ?>
    <div class="ticket" id="opened">
        <div class="ticket-main" id="ticket1">
            <div class="ticket-main-title">
                <span>Problème de connexion</span>
            </div>
            <div class="ticket-main-author">
                <span>Kylian Gravier</span>
            </div>
            <div class="ticket-main-labels">
                <span class="ticket-category bug">Bug</span>
                <span class="ticket-problem">Compte</span>
                <span class="ticket-priority medium">Moyen</span>
            </div>
            <div class="ticket-main-status open">
                Ouvert
            </div>
            <div class="ticket-main-message">
                <p>Je n'arrive pas à me connecter à mon compte</p>
            </div>
            <div class="ticket-main-actions">
                <button class="btn-primary">Commenter</button>
                <button class="btn-primary">Modifier</button>
                <button class="btn-tertiary">Fermer</button>
                <button class="btn-secondary">Supprimer</button>
            </div>
            <div class="ticket-main-date">
                <p>12/12/2024</p>
            </div>
            <div class="ticket-icon-comments">
                <img src="../imgs/icons/comments_off.svg" alt="comments off" class="comments-off-icon">
            </div>
        </div>
        <div class="ticket-comments">
            <div class="comment">
                <div class="comment-author">
                    <span>Admin</span>
                </div>
                <div class="comment-message">
                    <p>Je vais regarder ça</p>
                </div>
                <div class="comment-date">
                    <p>12/12/2024</p>
                </div>
            </div>
            <div class="comment">
                <div class="comment-author">
                    <span>Kylian Gravier</span>
                </div>
                <div class="comment-message">
                    <p>Ok problème résolu</p>
                </div>
                <div class="comment-date">
                    <p>12/12/2024</p>
                </div>
            </div>
        </div>

    </div>
    <div class="ticket" id="closed">
        <div class="ticket-main" id="ticket2">
            <div class="ticket-main-title">
                <span>PC s'allume pas</span>
            </div>
            <div class="ticket-main-author">
                <span>Kylian Gravier</span>
            </div>
            <div class="ticket-main-labels">
                <span class="ticket-category bug">Bug</span>
                <span class="ticket-problem">Matériel</span>
                <span class="ticket-priority high">Elevé</span>
            </div>
            <div class="ticket-main-status closed">
                Fermé
            </div>
            <div class="ticket-main-message">
                <p>Mon PC ne s'allume pas, j'ai essayé de le brancher sur une autre prise mais rien n'y fait</p>
            </div>
            <div class="ticket-main-actions">
                <button class="btn-primary">Commenter</button>
                <button class="btn-primary">Modifier</button>
                <button class="btn-tertiary">Fermer</button>
                <button class="btn-secondary">Supprimer</button>
            </div>
            <div class="ticket-main-date">
                <p>12/12/2024</p>
            </div>
            <div class="ticket-icon-comments">
                <img src="../assets/images/icons/comments.svg" alt="comments off" class="comments-off-icon">
            </div>
        </div>
    </div>
    <div class="add-ticket">
        <button class="btn-icon"><img src="../imgs/icons/add.svg" alt="add" class="add-icon"
                                      onclick="window.location.href='../new-ticket/';"></button>
    </div>
</main>

<?php require 'components/footer.php'; ?>
