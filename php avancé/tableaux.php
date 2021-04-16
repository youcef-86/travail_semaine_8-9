
<?php
                            // tableau simple

    // $tableau = array("Pomme", "Poire", "Banane"); 
    // echo $tableau[0]." ".$tableau[1]." ".$tableau[2]."<br>"; 
            
                           // tableau a plusiuers dimensions 

    // $tab1[] = array(1, "janvier", "2016"); 
    // $tab1[] = array(2, "février", "2017"); 
    // $tab1[] = array(3, "mars", "2018"); 
    // $tab1[] = array(4, "avril", "2019");
    // echo $tab1[2][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>"; 

                             // Tableaux associatifs
                        // 1er exemple pour afficher le mois

// $facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130, "Mai"=>560, "Juin"=>350); 
// $facture_sixmois=0;                          
// $mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

//     foreach ($facture as $mois => $valeur) 
//     { 
//         echo "Facture du mois de $mois : $valeur Euros<br/>"; 
//         $facture_sixmois +=$valeur; 
//     } 
                         
//     echo "Facture total de six mois : <b>$facture_sixmois Euros</b>"; 

                     // 2em exemple pour afficher juste la somme sans le mois

// $factures = array("Janvier" => 500, "Février" => 620, "Mars" => 300, "Avril" => 130, "Mai" => 560, "Juin" => 350); 

// $total_annuel = 0;

// foreach ($factures as $value) 
// { 
//    echo $value." &euro;<br>"; 
//    $total_annuel += $value;     
// } 

// echo "Total annuel de vos factures téléphoniques : ".$total_annuel." &euro;"; 

                        // La fonction array_push();Cette instruction permet d'ajouter un élément à la fin du tableau.

// $tableau = array("a" => "Lundi","b" => "Mardi","c" => "Mercredi","d" => "Jeudi");
// array_push($tableau, "Vendredi"); 

// foreach($tableau as $cle => $valeur) 
// { 
//   echo $cle ." : ".$valeur."<br>"; 
// }


                        // Tri dans les tableaux

        // la fonction sort(); trier dans l'ordre alphabétique ou numérique

    // $nom = array("franck","laurent","caroline","magali","veronique", "youcef");   
    // sort($nom);
                    
    // for ($i=0;$i<=count($nom)-1; $i++) 
    // {
    //     echo "$nom[$i]<br>";
    // }

                      // la fonction rsort(array); Tri décroissant d'un tableau
                      
    // $nom = array("franck","laurent","caroline","magali","veronique", "youcef");
    // rsort($nom);
                  
    // for ($i=0;$i<=count($nom)-1; $i++) 
    // {
    //     echo "$nom[$i]<br>";
    // }


                  // Instructions de manipulation de tableaux
        //   La fonction asort()Tri décroissant sur un tableau associatif

    // $tableau = array("a" => "Lundi",
    //                  "b" => "Mardi",
    //                  "c" => "Mercredi",
    //                  "d" => "Jeudi",
    //                  "e" => "Vendredi"
    //                 );
    // asort($tableau); 
    // foreach($tableau as $cle => $valeur) 
    // { 
    //    echo $cle ." : ".$valeur."<br>"; 
    // }

                    // La fonction arsort()Tri décroissant sur un tableau associatif

    //     $tab = array("a" => "Lundi",
    //                  "b" => "Mardi",
    //                  "c" => "Mercredi",
    //                  "d" => "Jeudi");
       
    //    arsort($tab);  
       
    //    foreach ($tab as $key => $item) 
    //    { 
    //        echo $key ." : ".$item."<br>"; 
    //    } 

                     // La fonction count()Retourne le nombre d'éléments d'un tableau.

    // $tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); 
    // $nb = count($tableau); 
    // echo"Le tableau contient ".$nb." éléments."; 

    
                       // La fonction array_pop()





                      
                
    
?>
                         
       
 