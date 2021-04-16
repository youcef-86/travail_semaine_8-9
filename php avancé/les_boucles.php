                                     <!-- Instruction for   L'instruction for est très proche de while dans le principe-->
<!-- 
<?php
for ($a = 1; $a < 10; $a++) { 
    echo $a."<br>"; 
}
?> -->

                                    <!-- Instruction while -->

<!-- <?php
$a = 0; 

while ($a < 10) { 
    echo $a."<br>";  
    $a++; 
} 

?> -->

                                  <!-- Instruction do .. while -->
<!-- <?php
$a = 0; 

do { 
    echo $a."<br>";  
} while ($a > 0); 
// do { 
//     if ($a < 5) { 
//         echo "a inférieur à 5"; 
//         break; 
//     } 
//     if ( ) ....... 
// } while (1); 
?> -->

                                            <!-- Exercices -->
                            <!-- Exercice1  affiche les nombre impairs entre 0 et 150, 1.3.5.7....-->

<!-- <?php
$a = 1;
while ($a < 150)
{
    echo $a.'<br>';
    $a++;
    $a++;
}
?> -->

    <!-- Exercice 2   Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.  -->
<!-- <?php
$a = 0;
while ($a < 500)
{
    echo "Je dois faire des sauvegardes régulières de mes fichiers";
    $a++;
}
?> -->


<!-- Exercice 3   Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant :  -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Table de multiplication :</h1>
        <table border="2">
        <?php
        echo("<th></th>");
        for ($n = 0; $n <= 12; $n++)
            {
                echo("<th>$n</th>");
            }
            
        for ($i = 0; $i <= 12; $i++)
        {
            echo("<tr>");
            echo("<th>$i</th>");

            for ($j = 0; $j <= 12; $j++)
            {
                $a = $i*$j;
                echo("<td>$a</td>");
            }
            echo ("</tr>");

        }
    
        ?>
        </table>
    </body>
</html>    

