<?php require "components/header.php"; ?>

<main>
    <link rel="stylesheet" href="../css/about.css">


    <form action="" method="post">
        <label for="fname">Prénom</label>
        <input type="text" name="fname" id="fname">
        <label for="lname">Nom</label>
        <input type="text" name="lname" id="lname">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="msg">Message</label>
        <textarea id="msg" name="msg"></textarea>
    </form>
</main>

<?php require "components/footer.php"; ?>
