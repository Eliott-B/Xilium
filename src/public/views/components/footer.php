
<?php if (isset($_SESSION['id'])): ?>
<div class="add-ticket" onclick="window.location.href='./create';">
    <button class="btn-icon"><img src="/imgs/icons/add.svg" alt="add" class="add-icon"></button>
</div>
<?php endif; ?>
<!-- FOOTER -->
<footer>
    <div class="footer">
        <div class="contents">
            <div class="content">
                <a href="./terms">Conditions d'utilisation</a>
                <a href="./privacy">Politique de confidentialité</a>
            </div>
            <div class="content">
                <a href="./contact">Contact</a>
                <a href="./faq">FAQ</a>
                <a href="./about">Qui sommes-nous ?</a>
            </div>
        </div>
        <hr>
        <span class='copy'>&copy; 2024 Xilium</span>
    </div>
</footer>
</div> <!-- Close main class -->
</body>

</html>