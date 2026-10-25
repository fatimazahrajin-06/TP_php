<?php

define("NOTE_MIN", 0);
define("NOTE_MAX", 20);

if (
    isset($_POST["nom"]) &&
    isset($_POST["note_info"]) &&
    isset($_POST["note_math"]) &&

    !empty($_POST["nom"]) &&
    !empty($_POST["note_info"]) &&
    !empty($_POST["note_math"])
) {

    $nom = htmlspecialchars($_POST["nom"]);
    $noteInfo = $_POST["note_info"];
    $noteMath = $_POST["note_math"];

    if (
        $noteInfo >= NOTE_MIN &&
        $noteInfo <= NOTE_MAX &&
        $noteMath >= NOTE_MIN &&
        $noteMath <= NOTE_MAX
    ) {

        echo "<h2>Récapitulatif</h2>";
        echo "Nom : $nom <br>";
        echo "Note Info : $noteInfo <br>";
        echo "Note Math : $noteMath <br>";

        $fichier = fopen("data/notes.csv", "a");
    } else {

        echo "Erreur : les notes doivent être comprises entre "
            . NOTE_MIN . " et " . NOTE_MAX;

    }

} else {

    echo "Erreur : tous les champs sont obligatoires.";

}


?>
