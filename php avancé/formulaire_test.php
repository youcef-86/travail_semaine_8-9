<!DOCTYPE html>
<html>
    <head>
        <title>formulaire PHP</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        <form method = "POST" action = "target.php">
            <p>
                <label for = "prenom">Entrez votre prénom : </label>
                <input type = "text" name = "prenom" id = "prenom"/>
            </p>
            <p>
                <label for = "nom">Entrez votre nom : </label>
                <input type = "text" name = "nom" id = "nom"/>
            </p>
            <p>
                <label for = "pseudo">Entrez votre pseudo : </label>
                <input type = "text" name = "pseudo" id = "pseudo"/>
            </p>
            <p>
                <input type = "submit" value = "Envoyer"/>
            </p>
    </body>
</html>