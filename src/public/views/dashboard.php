<?php require 'components/header.php';?>


<main>
    <link rel="stylesheet" href="../css/dashboard.css">
    <div class="btns-selec">
        <button class="btn-primary openeds">En cours</button>
        <button class="btn-secondary closeds">Clos</button>

    </div>

    <?php foreach ($tickets as $ticket): ?>
        <!-- <div class="ticket" id="opened"> -->
        <?php
        $status = new app\models\Status();
        $status = $status->get_status($ticket['status_id']);
        if ($status === "Fermé") {
            echo "<div class='ticket' id='closed'>";
        } else {
            echo "<div class='ticket' id='opened'>";
        }
        ?>
        <!-- <div class="ticket" id="opened"> -->
        <div class="ticket-main" id="ticket1">
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

                <?php
                $category = new app\models\Category();
                $category = $category->get_category($ticket['category_id']);
                $dict_css_category = [
                    "Bug" => "bug",
                    "Mise-à-jour" => "update",
                    "Fonctionnalité" => "feature",
                    "Autre" => "other"
                ];
                echo '<span class="ticket-category ' . $dict_css_category[$category] . '">' . $category . '</span>';

                $label = new app\models\Label();
                $label = $label->get_label($ticket['label_id']);
                echo '<span class="ticket-problem">' . $label . '</span>';

                $priority = new app\models\Priority();
                $priority = $priority->get_priority($ticket['priority_id']);
                $dict_css_priority = [
                    "Faible" => "low",
                    "Moyen" => "medium",
                    "Elevé" => "high"
                ];
                echo '<span class="ticket-priority ' . $dict_css_priority[$priority] . '">' . $priority . '</span>';
                ?>
            </div>

            <?php
            $status = new app\models\Status();
            $status = $status->get_status($ticket['status_id']);
            $dict_css_status = [
                "Ouvert" => "open",
                "Fermé" => "closed"
            ];
            echo '<div class="ticket-main-status ' . $dict_css_status[$status] . '">' . $status . '</div>';
            ?>
            <div class="ticket-main-message">
                <p>
                    <?= $ticket['tic_description'] ?>
                </p>
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
        </div>
    <?php endforeach; ?>
    <div class="add-ticket">
        <button class="btn-icon"><img src="../imgs/icons/add.svg" alt="add" class="add-icon"
                onclick="window.location.href='../new-ticket/';"></button>
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