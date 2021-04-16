<!doctype html>
<html>
    <head>
        <meta charset="utf_8">
        <meta name="description" content="">
        <title></title>
    </head>    
    <body>
                          <!-- zone php -->
        <?php
            
           
                    // On met les types autorisés dans un tableau (ici pour une image)
            $aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

                     // On extrait le type du fichier via l'extension FILE_INFO 
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
            finfo_close($finfo);

            if (in_array($mimetype, $aMimeTypes))
            {
                /* Le type est parmi ceux autorisés, donc OK, on va pouvoir 
                    déplacer et renommer le fichier */

            } 
            else 
            {
                 // Le type n'est pas autorisé, donc ERREUR

                echo "Type de fichier non autorisé";    
            exit;
            }   
        ?>
                          <!-- zone formulaire -->
        <form action="post.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fichier">
           
        </form>

    </body>
</html>