<?php require 'components/header.php'; ?>
<main>
<link rel="stylesheet" href="../css/create.css">
    <div class="box-new-ticket">
        <form action="" method="post">
            <div class="new-ticket">
                <h1>Nouveau ticket</h1>
                <p>Veuillez renseigner les informations pour créer un nouveau ticket.</p>
                <hr>

                <label for="title"><b>Objet</b> <span class="required">*</span></label>
                <input type="text" placeholder="Entrez l'objet de votre ticket" name="title" required id="title">

                <label for="category"><b>Catégorie</b> <span class="required">*</span></label>

                <select id="category" name="category">
                    <option disabled selected
                    >Catégorie</option>
                    <option value="1">Bug</option>
                    <option value="2">Fonctionnalité</option>
                    <option value="3">Mise-à-jour</option>
                    <option value="4">Autre</option>
                </select>

                <label for="problem"><b>Problème</b> <span class="required">*</span></label>
                <select id="problem" name="problem">
                    <option disabled selected
                    >Problème</option>
                    <option value="1">Réseau</option>
                    <option value="2">Logiciel</option>
                    <option value="3">Matériel</option>
                    <option value="4">Compte</option>
                    <option value="5">Autre</option>
                </select>

                <label for="priority"><b>Niveau d'urgence estimé</b></label>
                <select id="priority" name="priority">
                    <option disabled selected
                    >Niveau d'urgence</option>
                    <option value="1">Faible</option>
                    <option value="2">Moyen</option>
                    <option value="3">Elevé</option>
                </select>
                <label for="description"><b>Description</b> <span class="required">*</span></label>

                <textarea placeholder="Entrez la description de votre ticket" name="description" required rows="5" cols="33" id="description"
                ></textarea>

                <div class="btn-center"><button type="submit" class="btn-primary">Créer le ticket</button></div>
            </div>

        </form>
    </div>
    
</main>
<?php require 'components/footer.php'; ?>