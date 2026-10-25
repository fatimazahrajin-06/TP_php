
<?php
$fichier = "data/notes.csv";

if (!file_exists($fichier)) {
    echo "Erreur : le fichier CSV n'existe pas.";
    exit;
}

$Fichier1 = fopen($fichier, "r");

if ($Fichier1 === false) {
    echo "Erreur : impossible d'ouvrir le fichier CSV.";
    exit;
}

$sommeMoyennes = 0;
$nombreApprenants = 0;

echo "<table border='1'>";
echo "<tr>
        <th>Nom</th>
        <th>Info</th>
        <th>Math</th>
        <th>Moyenne</th>
        <th>Mention</th>
    </tr>";

while (!feof($Fichier1)) {
    $ligne = fgets($Fichier1);

    if ($ligne !== false) {
        $donnees = explode(",", trim($ligne));

        $nom = $donnees[0];
        $info = (float) $donnees[1];
        $math = (float) $donnees[2];

        $moyenne = ($info + $math) / 2;

        if ($moyenne < 10) {
            $mention = "Non validé";
        } elseif ($moyenne < 12) {
            $mention = "Passable";
        } elseif ($moyenne < 14) {
            $mention = "Assez bien";
        } elseif ($moyenne < 16) {
            $mention = "Bien";
        } else {
            $mention = "Très bien";
        }

        echo "<tr>";
        echo "<td>" . htmlspecialchars($nom) . "</td>";
        echo "<td>" . htmlspecialchars((string)$info) . "</td>";
        echo "<td>" . htmlspecialchars((string)$math) . "</td>";
        echo "<td>" . number_format($moyenne, 2) . "</td>";
        echo "<td>" . htmlspecialchars($mention) . "</td>";
        echo "</tr>";

        $sommeMoyennes += $moyenne;
        $nombreApprenants++;
    }
}

echo "</table>";

fclose($Fichier1);

if ($nombreApprenants > 0) {
    $moyenneClasse = $sommeMoyennes / $nombreApprenants;

    echo "<p>Moyenne générale de la classe : "
        . number_format($moyenneClasse, 2)
        . "</p>";
} else {
    echo "<p>Aucun apprenant enregistré.</p>";
}
?>