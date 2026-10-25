<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ex03 Tableau</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php 
        include("includes/entete_inc.php");
        include("includes/menu_inc.php");
        echo "<br>";

    // 3.1
    $notes=[
        "Mohamed" => 16,
        "Ahmed" => 14,
        "samir" => 13,
        "Aicha" => 15,
        "samir" => 13,
        "zakaria" => 13,
        "Rafik" => 10,
        "Ilham" => 9,
        "Hamza" => 7,
        "Sami" => 7,
        "Noura" => 14
    ];
    $modules = ["programmation web 2","structure des donnees en C","recherce operationel"];
    // utilisation de foreach
    echo "<br>affichage avec utilisation de foreach<br>";
    foreach($modules as $module){
        echo "$module<br>";
    }
    // accedant par indice 
    echo "<br>affichage avec indice<br>";
    for ($i=0;$i<count($modules);$i++){
        echo "$modules[$i]<br>";
    }
    // 3.2
    require 'config.php';
    function mention($note){
    if ($note < 0 || $note > 20) {
        return " Note invalide<br>";
    }elseif ($note >= 16){
        return " Très bien<br>";
    } elseif ($note >= 14) {
        return " Bien<br>";
    } elseif ($note >= 12) {
        return " Assez bien<br>";
    }elseif ($note >= Seuil) {
        return " Passable<br>";
    }else {
        return " ajourne<br>";
    }
}
    ?>
    <br>
    <table border="1">
    <tr>
        <th>Nom</th>
        <th>Note</th>
        <th>Mention</th>
    </tr>

    <?php

foreach ($notes as $nom => $note) {
?>
    <tr style="<?= $note < $Seuil ? 'color:red;' : '' ?>">
        <td><?= $nom ?></td>
        <td><?= $note ?></td>
        <td><?= mention($note) ?></td>
    </tr>
<?php
}
    ?>
</table>
    <!-- 3.3 -->
    <?php
    //avec utilisation boucle
    echo "<br>affichafe avec boucle<br>";
    $somme=0;
    $nmbnotes=0;
    $faible=null;
    $meilleure=null;
    foreach ($notes as $note) {
        $somme += $note;
        $nmbnotes += 1;
        if ($meilleure === null || $note > $meilleure) {
            $meilleure = $note;
        }
        if ($faible === null || $note < $faible) {
            $faible = $note;
        }
    }
    $moyenne = $somme/$nmbnotes;
    echo "La somme est : $somme<br>";
    echo "La moyenne est : $moyenne<br>";
    echo "La meilleure note : $meilleure<br>";
    echo "Faible : $faible<br>";
    // verification 
    echo "<br>verification<br>";
    $somme1=array_sum($notes);
    echo "La somme est : $somme1<br>";
    $moyenne1 = $somme1 / count($notes);
    echo "La moyenne est : $moyenne1<br>";
    $meilleure1 = max($notes);
    echo "La meilleure note : $meilleure1<br>";
    $faible1 = min($notes);
    echo "Faible : $faible1<br>";

    // 3.4
    function afficher($tab) {
        foreach ($tab as $nom => $note) {
            echo "$nom : $note <br>";
        }
    }
    echo "<h3>1. Noms croissants</h3>";
    ksort($notes);
    afficher($notes);

    echo "<h3>2. Notes décroissantes</h3>";
    arsort($notes);
    afficher($notes);

    echo "<h3>3. Noms décroissants</h3>";
    krsort($notes);
    afficher($notes);

    echo "<h3>4. Notes croissantes</h3>";
    asort($notes);
    afficher($notes);

    include("includes/pied_inc.php");
    ?>
    </body>
</html>
