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
                
                    <option disabled selected>Catégorie</option>
                    <?php foreach ($categories as $category){
                        echo "<option value=" .$category['cat_id'] . ">" . $category['cat_name'] . "</option>";
                    }
                    ?>
                </select>

                <label for="problem"><b>Problème</b> <span class="required">*</span></label>
                <select id="problem" name="problem">
                    <option disabled selected>Problème</option>
                    <?php foreach ($labels as $label){
                        echo "<option value=" . $label['lab_id'] . ">" . $label['lab_name'] . "</option>";
                    }
                    ?>
                </select>

                <label for="priority"><b>Niveau d'urgence estimé</b></label>
                <select id="priority" name="priority">
                    <option disabled selected>Niveau d'urgence</option>
                    <?php foreach ($priorities as $priority){
                        echo "<option value=" . $priority['pri_id'] . ">" . $priority['pri_name'] . "</option>";
                    }
                    ?>
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