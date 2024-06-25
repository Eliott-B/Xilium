<?php require 'components/header.php'; ?>
<main>
    <link rel="stylesheet" href="../css/faq.css">
    <section class="faq">
        <div class="questions">
            <h2>Questions fréquentes</h2>
            <details class="question">
                <summary class="question-title">Qu'est-ce que Xilium ?</summary>
                <p class="reponse-content">C'est une plateforme web qui permet aux membres d'un organisme de soumettre
                    des tickets d'assistance informatique et de suivre leur traitement.</p>
            </details>
            <details class="question">
                <summary class="question-title">Comment puis-je créer un ticket d'assistance ?</summary>
                <p class="reponse-content">Pour créer un ticket d'assistance, vous devez cliquer sur le "+" situé en bas à droite de votre écran, puis remplir de formulaire.</p>
            </details>

            <details class="question">
                <summary class="question-title">Comment puis-je suivre le traitement de mon ticket ?</summary>
                <p class="reponse-content">Vous pouvez suivre le traitement de votre ticket en vous connectant à la
                    plateforme et en consultant la section "Tableau de bord". Vous y trouverez des informations telles que
                    le statut de votre ticket, les commentaires des techniciens et les solutions proposées.</p>
            </details>

            <details class="question">
                <summary class="question-title">Que faire si je n'ai pas de réponse à mon ticket après plusieurs jours ?
                </summary>
                <p class="reponse-content">Si vous n'avez pas de réponse à votre ticket après plusieurs jours, vous
                    pouvez <a href="/contact">contacter</a> le support informatique de l'entreprise par téléphone ou par e-mail.</p>
            </details>

            <details class="question">
                <summary class="question-title">Comment puis-je modifier les informations de mon ticket ?</summary>
                <p class="reponse-content">Vous pouvez modifier les informations de votre ticket en vous connectant à la
                    plateforme et en consultant la section "Tableau de bord". Cliquez ensuite sur le bouton "Modifier" pour
                    modifier les informations de votre ticket.</p>
            </details>

            <details class="question">
                <summary class="question-title">J'ai oublié mon mot de passe, que faire ?</summary>
                <p class="reponse-content">Vous pouvez contacter le support de la plateforme dans la page <a href="/contact">contact</a> pour réinitialiser votre mot de passe.</p>
            </details>
        </div>
    </section>
</main>
<?php require 'components/footer.php'; ?>
