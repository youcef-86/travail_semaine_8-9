
                    <!-- Les chaînes de caractères (variables alphanumériques) -->

<!-- <html>
<body>
    <?php
    $bonjour="hello";
       echo $bonjour;
    ?>
</body>
</html> -->


                             <!-- Les variables numériques -->

<!-- <html>
<body>
    <?php
        $var1 = 123;
        $var2 = 14.35;
        echo $var1,'  ', $var2;
    ?>
</body>
</html> -->
                                  
                                   <!-- Les tableaux -->

<!-- <html>
<body>
    <?php
      $couleur[] = "red";
      $couleur[] = "blue";
      $couleur[] = "white";
      $couleur[] = "black";
      
      // pour afficher la valeur "white", on écrira :
      echo $couleur[2]
    ?>
</body>
</html> -->


                                <!-- Le type booléen -->


<!-- <html>
<body>
    <?php
    $var1 = false;
    $var2 = true;
    echo $var2;
    ?>
</body>
</html> -->

                              <!-- Les variables superglobales -->

<!-- <html>
<body>
<?php
    $_GET["societe"] = "Afpa";
    echo $_GET["societe"]; // Affiche 'Afpa'
    ?>
</body>
</html> -->

                            <!-- Forcer le type d'une variable -->

<!-- <html>
<body>
    <?php
    // $a = 15.125863;
    // settype($a, "int"); 
    // echo $a;
    $a = 6.32172; 
    $b = intval($a); 
    $c = doubleval($a); 
    echo $a - $b - $c;
    ?>
</body>
</html> -->

                                          <!-- Les constantes -->
<!-- 
<html>
<body>
<?php
    define("EURO", 6.55957);
    echo EURO; // affiche 6.55957
    ?>
</body>
</html>  -->

                                  <!-- Les "variables variables" -->

<!-- <html>
<body>
<?php
    $var1 = "bonjour";
    $$var1 = "le monde";
    echo $bonjour;
    ?>
</body>
</html> -->

                    <!-- Les métaconstantes et les fonctions de débogage -->

<!-- <html>
<body>
<?php
    $myVar = "bonjour";
    var_dump($myVar);
    ?>
</body>
</html> -->

                              <!-- La fonction error_log() -->


<!-- <?php
$myVar = "KO";
if ($myVar == "OK") 
{   
   echo"C'est bon<br>";
} 
else 
{
    // echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
    // error_log("Ouh la la pas bien"); // Message enregistré dans le fichier 'C:/wamp/logs/php_error.log' 
    echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
    $message = "Ouh la la pas bien ".__FILE__." ".__LINE__;        
    error_log($message);
} 
?> -->

                                   <!-- Les variables système -->

<!-- <html>
<body>
<?php
//    echo $_SERVER["SERVER_NAME"];  //affiche le nom de l'hôte (= serveur), localhost pour Wamp
      var_dump($_SERVER);   //affiche toutes les variables du tableau $_SERVER
    ?>
</body>
</html>  -->

                             <!-- Les fonctions printf et sprintf -->

<!-- <html>
<body>
<?php
  $euro = 6.55957;
  printf("%.2f CC<br />",$euro);

  $money1 = 68.75;
  $money2 = 54.35;
  $money = $money1 + $money2;

  echo $money; // affiche 123.1;

  echo "affichage sans printf : ".$money."<br>";

  $monformat = sprintf("%01.2f", $money);

  echo $monformat; // affiche 123.10

  echo "affichage avec printf : ".$monformat."<br>";

  $year = "2002";
  $month = "4";
  $day = "5";

  $date = sprintf("%04d-%02d-%02d", $year, $month, $day);

  echo $date."<br>"; // affichera "2002-04-05"
  echo "affichage avec sprintf : ".$date."<br>";
?> -->

                                              <!-- La portée d'une variable -->
                                             
 <!-- global -->

<?php
$a = $b = 2; 

function somme() { 
  global $a, $b; 
  $b = $a + $b; 
} 

somme(); 

echo $b."<br>";
?>

<!-- static -->
<?php
// function Test() { 
//     $a=0; 
//     echo $a."<br>"; 
//     $a++; 
//  } 

//  // Appel de la fonction (2 fois)
//  Test(); 
//  Test(); 

// function Test1() 
// { 
//    static $a=0; 
//    echo "$a<br>"; 
//    $a++;
// } 

// // Appel de la fonction (3 fois)
// Test1(); 
// Test1(); 
// Test1(); 
// ?>