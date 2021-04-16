<!DOCTYPE html>
<html>
    <head>
        <title>Target PHP</title>
        <meta charset="utf-8"/>
    </head>

    <body>
       <?php
            $prenom = $nom = $pseudo = "";

            function securisation($donnees){
                $donnees = trim($donnees);
                $donnees = stripslashes($donnees);
                $donnees = strip_tags($donnees);
                return $donnees;
            }

            $prenom = securisation($_POST['prenom']);
            $nom = securisation($_POST['nom']);
            $pseudo = securisation($_POST['pseudo']);

            echo 'Ton prenom est :' .$prenom. '<br/>';
            echo 'Ton nom est :' .$nom. '<br/>';
            echo 'Ton pseudo est :' .$pseudo;
       ?>
    </body>
</html>