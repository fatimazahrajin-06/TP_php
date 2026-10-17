<?php 
echo '<h1>Hello PHP</h1><br>';
echo "<h2>1. Noms de variables</h2>";
/*1. Noms de variables */
// les declaration valides sont ($Prix_HT, $x, $_x) car il commence par un lettre et underscor (_) plus il n y a pas des espace ou commence par nombre... 
echo "<h2>2. Constantes</h2>";
//2.Constantes
require 'config.php';
echo ETABLISSEMENT . "<br>";
echo Note_max . "<br>";
echo Note_min . "<br>";
echo Seuil . "<br>";
if (defined("Seuil")) {
    echo Seuil . "<br>";}
if (defined("Inconnue")){
    echo Inconnue;
}
echo "<h2>3. Calcul</h2>";
// 3. Calcul
$prix_ht = 60;
$tva = 20;
$prix_ttc=$prix_ht * (1+$tva/100);
echo $prix_ttc . "<br>";

echo "<h2>4. Types et conversions</h2>";
// 4. Types et conversions
$test = 42;
$test= (string) $test;
var_dump($test);
/* 0 false,
0.0 false,
"0" false,
"" false,
"abc" true,
[] false,
 null false */
var_dump((bool) 0);
var_dump((bool) 0.0);
var_dump((bool) "0");
var_dump((bool) "");
var_dump((bool) "abc");
var_dump((bool) []);
var_dump((bool) null);
/* (int) 3.9 -> 3, (int) "12abc" -> erreur, (float) "1.5e3" -> erreur, (int) true -> 1*/
var_dump((int) 3.9);
var_dump((int) "12abc");
var_dump((float) "1.5e3");
var_dump((int) true);
// note :php peut convertir le debut numerique d'une chaine + 15e3 c'est une ecriture scientifiq 1.5*10^3
$decimal = 255;
$hexadecimal = 0xFF;
$octal = 377;
$binary = 11111111;

var_dump($decimal);
var_dump($hexadecimal);
var_dump($octal);
var_dump($binary);

echo "<h2>5. Chaînes de caractères</h1>";
// 5. Chaînes de caractères
$traitees = "égales à";
$ici = 2;
echo "Ahmed a dit : \"J'ai réussi\"<br>";
echo "Voulez-vous supprimer C:\\*.*? <br>";
echo "Ceci n'affichera pas \\n de nouvelle ligne<br>";
echo 'Les variables ne seront pas $traitees $ici<br>';
echo "Les variables ne seront pas $traitees $ici<br>";
$chain = "*Bonjour les développeurs*";
$chain = trim($chain, "*");
echo $chain . "<br>";
for ($i = 0; $i < strlen($chain); $i++){
    echo $chain[$i] . "<br>";
}
?>
