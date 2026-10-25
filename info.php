<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
    
    <?php
        $nom = $_GET["nom"];
        $prenom = $_GET["prenom"];
        $sexe = $_GET["sexe"];

    if ($sexe == "Homme") {
        echo "Bonjour Monsieur " . $nom . " " . $prenom;
    } else {
        echo "Bonjour Madame " . $nom . " " . $prenom;
    }
    ?>

    </body>
</html>
