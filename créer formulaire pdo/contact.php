<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Entreprise Jarditou</title>
</head>
<body>
                              <!--page d'accueil-->
    <header>
        <h3>PAGE ACCUEIL:</h3>
        <img src="IMG/jarditou_logo.jpg" alt="logo entreprise" title="logo entreprise" width="300" height="100">
        <p>La qualité depuis 70 ans</p>
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="Tableau.html">Tableau</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
        <img src="IMG/promotion.jpg" alt="promotion">
    </header>
                            <!--contact-->
        <h1>Contact</h1>
    <hr>
                            <!--zone obligatoire-->
        <p>*Ces zones sont obligatoires</p>
                            <!--form des coordonnées-->
    <form action="script.php" method="GET">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <label for="nom">Votre nom* :</label>
            <input type="text" name="nom" id="nom" required><br>
            <label for="prénom">Votre prénom* :</label>
            <input type="text" name="prénom" id="prénom" required><br>
            <?php 
            if ( isset($_GET["erreur"]) && $_GET["erreur"] == "prénom") 
                {
                    echo"Le prénom doit être renseigné.";  
                }
            ?> 
                            
        <br>
                               <!--sexe-->
            <label>sexe* :</label>
            <input type="radio" name="selectionsexe" id="masculin" required>
            <label for="masculin">masculin</label>
            <input type="radio" name="selectionsexe" id="féminin" required>
            <label for="féminin">féminin</label>

        <br>
                               <!--date de naissance-->
            <label for="date">Date de naissance* :</label>
            <input type="date" name="date" id="date" required><br>
                               <!--code postal-->
            <label for="cp">Code postal* :</label>
            <input type="number" name="cp" id="cp" required><br>
                               <!--adresse-->
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse"><br>
                               <!--ville-->
            <label for="ville">Ville :</label>
            <input type="text" name="ville" id="ville"><br>
                               <!--email-->
            <label for="email">Email* :</label>
            <input type="email" name="email" id="email" placeholder="dave.loper@afpa.fr"required><br>
        </fieldset>

        <br>
        <fieldset>
            <legend>Votre demande</legend>
                            <!--sujet-->
            <label for="sujet">Sujet* :</label>
            <select id="sujet" name="sujet" required>
                <option value="" selected disabled >Veuillez séléctionner un sujet</option>
                <option value="" >Mes commandes</option>
                <option value="" >Question sur un produit</option>
                <option value="" >Autres</option>
            </select><br>
                            <!--votre question-->
            <label for="question">Votre question* :</label>
            <textarea name="question" id="question" required></textarea>
        </fieldset><br>
                            <!--confirmation de l'envoie-->
            <input type="checkbox" value="Bleu" required>* J'accepte le traitement informatique de ce formulaire<br>
            <input type="submit" name="envoyer" value="Envoyer">
            <input type="reset" name="annuler" value="annuler">
    </form>
    <hr>
    <footer>
        <nav>
            <ul>
                <li><a href="">Mention légales</a></li>
                <li><a href="">Horaires</a></li>
                <li><a href="">Plan du site</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
