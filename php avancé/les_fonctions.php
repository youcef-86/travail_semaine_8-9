

                                    <!-- Déclaration d'une fonction -->
<!-- <?php
function bonjour() 
{
    echo "Bonjour";
}bonjour()
?> -->


                                 <!-- Arguments -->

<!-- <?php
function bonjour($prenom) 
{
    echo "Bonjour ".$prenom;
}bonjour("dave"); 
?> -->

<!-- <?php

$prenom = "Dave";
$nom = "Loper";

function bonjour($prenom, $nom) 
 {
     echo "Bonjour ".$prenom." ".$nom;

 } bonjour($prenom, $nom);
?> -->

                                    <!-- Renvoyer des informations -->
<!-- 
<?php

$aire = aire(10,20);
echo $aire; 

function aire($largeur,$longueur) 
{
   $total = $largeur*$longueur;
   return $total;
   
} 
?>

<?php
$age = 19;

function isMineur($age) 
{      
    if ($age > 18) 
    {
        return "majeur";
    } 
    else 
    {
        return "mineur";
    } 
} 

?> -->

<!-- Exercice
Ecrivez la fonction calculator() traitant les opérations d'addition, de soustraction, de multiplication et de division. -->
	
<?php

$addition = 2 + 4;
$soustraction = 6 - 2;
$multiplication = 5 * 3;
$division = 15 / 3;
echo "Addition: 2 + 4 = ".$addition."<br />";
echo "Soustraction: 6 - 2 = ".$soustraction."<br />";
echo "Multiplication:  5 * 3 = ".$multiplication."<br />";
echo "Division: 15 / 3 = ".$division."<br />";

?>