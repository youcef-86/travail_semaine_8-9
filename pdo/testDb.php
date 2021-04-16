<?php
 /* Afin de ne pas trop mélanger le code PHP avec le HTML et améliorer la lisibilité, 
 * on peut mettre la connexion PDO en haut de la page 
 */ 
 try 
   {        
       $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou', 'root', '');
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (Exception $e) {
      echo "Erreur : " . $e->getMessage() . "<br>";
      echo "N° : " . $e->getCode();
      die("Fin du script");
}    

/* Ajoutons ici notre bloc d'exécution de la requête,
* Ainsi, elle est englobée dans le reste du code PHP
*/
$requete = "SELECT * FROM produits";
$result = $db->query($requete);

$produit = $result->fetchall(PDO::FETCH_OBJ);
$result->closeCursor();   
?>
<html>
<head>
   <meta charset="UTF-8">
   <title>testDb.php</title>      
</head>
<body>
<p>Ma page conteint un produit:
 
<table>
  <?php
  foreach ($produit as $value)
  {
    echo("<tr>
            <td><img src='IMG/$value->pro_id.jpg' width='110' height='110' alt='image'></td>
            <td>$value->pro_id</td>
            <td>catégorié</td>
            <td>$value->pro_libelle</td>
            <td>prix</td>
            <td>couleur</td>
            </tr>");
    echo $value->pro_libelle.";<br>";
  }
  ?>
</table>
</p>   
</body>
</html>