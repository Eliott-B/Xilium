<?php require 'components/header.php'; ?>

<!-- BODY -->
<main>
    <div class="first-box">
        <div class="video">
            <iframe src="" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>
            <p>Guide de présentation</p>
        </div>

        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corporis quae esse eaque,
                reprehenderit ut laboriosam ipsam assumenda modi et quo accusantium? Minus et sunt tempore explicabo
                debitis perferendis illo.
                Est nisi, doloremque, enim harum adipisci molestias exercitationem unde natus amet possimus ipsum
                facilis fuga voluptates repellat nostrum quis provident tenetur nam? Itaque delectus quisquam nulla,
                blanditiis unde magni libero.
                Aliquid inventore quaerat nisi provident soluta, est placeat molestiae dolorem nihil, voluptas earum
                facilis magni, iste laboriosam ipsa exercitationem eos voluptatem vitae mollitia cumque. Consectetur
                quis beatae autem esse sit.
                Voluptates quos, inventore reprehenderit ad omnis quod, dolore esse, quaerat repellat dolor delectus
                possimus at dolores magnam vero? Totam quisquam quo numquam nam tempore fugit nihil laboriosam sed, quis
                voluptas.
                In quam suscipit culpa quos. Ad, corporis quibusdam in culpa aperiam dolore consectetur vel odit
                accusamus ea natus quis dolorum fugiat amet. Blanditiis inventore delectus aliquid a repellat enim quia.
            </p>
            <?php if (isset($_SESSION['id'])): ?>
                <button class="btn-primary" onclick="window.location.href='./dashboard'">Mes tickets</button>
            <?php else: ?>
                <button class="btn-primary" onclick="window.location.href='./login'">Se connecter</button>
                <p class="register">Vous n'avez pas de compte ? <a href="./register">Inscrivez-vous</a></p>
            <?php endif ?>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
        <path fill="#0099ff" fill-opacity="1"
            d="M0,64L40,90.7C80,117,160,171,240,170.7C320,171,400,117,480,112C560,107,640,149,720,176C800,203,880,213,960,213.3C1040,213,1120,203,1200,170.7C1280,139,1360,85,1400,58.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>

    <section class="table-tickets">
        <h2>Tickets en cours dans Xilium</h2>
        <table>
            <tr>
                <th>Titre</th>
                <th>Description</th>
            </tr>
            <?php foreach ($tickets as $ticket): ?>
                <tr onclick="window.location.href='./ticket/<?= $ticket['tic_id'] ?>';">
                    <td>
                        <?= $ticket['tic_title'] ?>
                    </td>
                    <td>
                        <?= $ticket['tic_description'] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </section>
</main>


<?php require 'components/footer.php'; ?>