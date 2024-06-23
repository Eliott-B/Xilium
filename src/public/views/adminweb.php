<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <title>Xilium</title>
    <link rel="stylesheet" href="../gstyles/main/main.css"/>
    <link rel="stylesheet" href="../gstyles/header/header.css"/>
    <link rel="stylesheet" href="../gstyles/footer/footer.css"/>
    <link rel="stylesheet" href="../gstyles/button/button.css"/>
    <link rel="stylesheet" href="admin.css"/>

    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function toggleForm() {
            var form = document.getElementById("modification-form");
            form.classList.toggle("hidden");
        }
    </script>
</head>
<body>
<header>
    <a href="../index.html">
        <div class="logo">
            <img alt="logo-xilium" src="../assets/images/logos/xilium.svg">
        </div>
    </a>
    <div class="navbar">
        <ul>
            <a href="../dashboard/">
                <li>
                    <h1>Tableau de bord</h1>
                </li>
            </a>
            <a href="../faq/">
                <li>
                    <h1>Questions Frequentes</h1>
                </li>
            </a>
            <a href="../about/">
                <li>
                    <h1>A propos</h1>
                </li>
            </a>

        </ul>
    </div>
    <div class="icons">
        <img src="../assets/images/icons/user.svg" alt="icon user" class="icon"
             onclick="window.location.href='../account/';">
        <button><a href="../login/">Connexion</a></button>
    </div>
</header>

<h1>Panneau d'administration - Ticketing</h1>
<section class="tickets-list">
    <h2>Liste des tickets</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Sujet</th>
            <th>Statut</th>
            <th>Technicien</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <!-- Boucle pour afficher les tickets -->
        <tr>
            <td>1</td>
            <td>Ticket 1</td>
            <td>Ouvert</td>
            <td>Marco</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Ticket 2</td>
            <td>Fermé</td>
            <td>Polo</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Ticket 3</td>
            <td>En cours</td>
            <td>Jean</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Ticket 4</td>
            <td>Ouvert</td>
            <td>Personne</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Ticket 5</td>
            <td>Bloqué</td>
            <td>Mercredi la bresom</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Ticket 6</td>
            <td>Ouvert</td>
            <td>Marco</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>7</td>
            <td>Ticket 7</td>
            <td>Fermé</td>
            <td>Polo</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>Ticket 8</td>
            <td>En cours</td>
            <td>Jean</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>9</td>
            <td>Ticket 9</td>
            <td>Ouvert</td>
            <td>Personne</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>Ticket 10</td>
            <td>Bloqué</td>
            <td>Mercredi la bresom</td>
            <td class="td-action">
                <a href="#" onclick="toggleForm()">Modifier</a>
                <a href="#">Supprimer</a>
            </td>
        </tr>
        <!-- Fin de la boucle -->
        </tbody>
    </table>
</section>
<section id="modification-form" class="hidden">
    <h2>Modification du ticket : `${ticket-en-cours}`</h2>
    <form>
        <label for="statut">Statut :</label>
        <select id="statut" name="statut">
            <option value="ouvert">Ouvert</option>
            <option value="en cours">En cours</option>
            <option value="bloque">Bloqué</option>
            <option value="ferme">Fermé</option>
        </select>

        <label for="technicien">Technicien : </label>
        <select id="technicien" name="technicien">
            <!-- Boucle affichant les technicien dispo-->
            <option value="technicien_1">Marco</option>
            <option value="technicien_2">Pablo</option>
            <option value="technicien_3">Jean-Jacques</option>
            <!--Fin de la boucle-->
        </select>
        <button type="button">Nouveau technicien</button>

        <label for="urgence">Niveau d'urgence :</label>
        <select id="urgence" name="urgence">
            <option value="faible">Faible</option>
            <option value="moyen">Moyen</option>
            <option value="eleve">Elevé</option>
        </select>

        <button type="submit">Enregistrer</button>
    </form>
</section>

</body>
<footer>
    <div class="footer">
        <div class="footer-content">
            <span>&copy; 2024 Xilium.</span>
            <a href="../terms/">Conditions d'utilisation</a>
            <a href="../privacy/">Politique de confidentialité</a>
            <a href="../contact/">Contact</a>
        </div>
    </div>
</footer>


</html>