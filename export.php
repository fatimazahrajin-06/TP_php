
<?php
$fichierCSV = "data/notes.csv";
$fichierJSON = "data/notes.json";

if (!file_exists($fichierCSV)) {
    echo "Erreur : le fichier CSV n'existe pas.";
    exit;
}

$handle = fopen($fichierCSV, "r");

if ($handle === false) {
    echo "Erreur : impossible d'ouvrir le fichier CSV.";
    exit;
}

$resultats = [];

while (($ligne = fgetcsv($handle, 0, ",")) !== false) {
    if (count($ligne) < 3) {
        continue;
    }

    $nom = $ligne[0];
    $info = (float) $ligne[1];
    $math = (float) $ligne[2];
    $moyenne = ($info + $math) / 2;

    $resultats[] = [
        "nom" => $nom,
        "notes" => [
            "info" => $info,
            "math" => $math
        ],
        "moyenne" => $moyenne
    ];
}

fclose($handle);

// 1. Convertir le tableau PHP en JSON
$json = json_encode(
    $resultats,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

// 2. Écrire le JSON dans le fichier
if ($json === false ||
    file_put_contents($fichierJSON, $json) === false) {
    echo "Erreur lors de l'écriture du fichier JSON.";
    exit;
}

echo "<h3>Contenu du fichier JSON relu :</h3>";

// 3. Relire le fichier JSON
$jsonLu = file_get_contents($fichierJSON);
$donnees = json_decode($jsonLu, true);

echo "<pre>";
print_r($donnees);
echo "</pre>";

// 4. Comparer serialize() et json_encode()
echo "<h3>Résultat de serialize() :</h3>";
echo "<pre>";
echo htmlspecialchars(serialize($resultats));
echo "</pre>";

echo "<h3>Résultat de json_encode() :</h3>";
echo "<pre>";
echo htmlspecialchars(json_encode(
    $resultats,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
));
echo "</pre>";
?>
