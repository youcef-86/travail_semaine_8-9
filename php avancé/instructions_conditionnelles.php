
                                               <!-- Instruction if -->

<!-- <?php
if ($a > $b) 
{ 
    echo "$a est plus grand que $b"; 
} 
else 
{ 
   echo "$a est moins grand que $b"; 
} 
?> -->

                                              <!-- Instruction switch -->
<!-- <?php
$a = 2; 

switch ($a) 
{ 
    case 0 : 
       echo"$a = 0"; 
       break; 

    case 1 : 
       echo "$a = 1"; 
       break; 

    case 2 : 
       echo "$a = 2"; 
       break; 
}
?> -->

<!-- <?php

$age = '25';

// if ($age>=18)
// {
//    $a = "majeur";
// }
// else
// {
//    $a = "mineur";
// }

//  (($age >= 18) ? $age="majeur" : $age="mineur");
//  echo "Vous êtes ".$a. ".";

echo "Vous êtes ".(($age >= 18) ? "majeur" : "mineur"). ".";
?> -->

                                          <!-- L'opérateur Null coalescent -->

<?php
// Récupére la valeur de $_GET['utilisateur'] retourne 'aucun' s'il n'existe pas :
// $identifiant = $_GET['utilisateur'] ?? 'aucun';

// Ceci est équivalent à :
$identifiant = isset($_GET['utilisateur']) ? $_GET['utilisateur'] : 'aucun';

/* L'opérateur permet de faire du chaînage : Ceci va retourner la 
* première valeur définie respectivement dans $_GET['utilisateur'], 
* $_POST['utilisateur'] et 'aucun' 
*/ 
$identifiant = $_GET['utilisateur'] ?? $_POST['utilisateur'] ?? 'aucun';  
?>                               
