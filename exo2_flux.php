<?php
echo '<h1>Structures de contrôle et boucles</h1><br>';
require 'config.php';
function mention($note){
    if ($note < 0 || $note > 20) {
            echo $note . " -> Note invalide<br>";
            return;
    }elseif ($note >= 16){
        echo $note . " -> Très bien<br>";
        return;
    } elseif ($note >= 14) {
        echo $note . " -> Bien<br>";
        return;
    } elseif ($note >= 12) {
        echo $note . " -> Assez bien<br>";
        return;
    }elseif ($note >= Seuil) {
        echo $note . " -> Passable<br>";
        return;
    }else {
        echo $note . " -> ajourne<br>";
        return;
    }
}
echo "<h2>1. if / elseif / else</h2>";
$note1=8;
mention($note1);
$note2=13;
mention($note2);
$note3=15.31;
mention($note3);
$note4=17;
mention($note4);
$note5=21;
mention($note5);
echo "<h2>2. switch</h2>";
echo date("m") . "<br>";
$mois = (int)date("m");
switch ($mois){
            case 1:
                echo "Janvier";
                break;
            case 2:
                echo "Fevier";
                break;
            case 3:
                echo "Mars";
                break;
            case 4:
                echo "Avril";
                break;
            case 5:
                echo "Mai";
                break;
            case 6:
                echo "Juin";
                break;
            case 7:
                echo "Juil";
                break;
            case 8:
                echo "Aout";
                break;
            case 9:
                echo "Septembre";
                break;
            case 10:
                echo "Octobre";
                break;
            case 11:
                echo "Novembre";
                break;
            case 12:
                echo "Decembre";
                break;
            default : echo "Le nembre de mois est invalide";
        }
    // si on oublie break la case suivant va executer aussi jousqua trouver break ou le cas default.
    echo "<h2>3. Boucles</h2>";
    echo "<h2>Triangle de * </h2>";
    for($i=0;$i<6;$i++){
        for ($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
echo "<h2>Les nobmbres de 0 a 20</h2>";
    $max = 20;
    $i=0;
    while ($i<=$max){
        if ($i == ($max/2)){
            echo "<h1>$i</h1>";
        }else{
            echo "$i<br>";
        }
        $i+=2;
    }
echo "<h2>Les nobmbres paire</h2>";
    for($i=0;$i<=10;$i++){
        if ($i%2!=0){
            continue;
        }
        echo "$i<br>";
    }
echo "<h2>question 4</h2>";
$i=0;
while(true){
    switch ($i){
        case 5:
            echo "at$i";
            break;
        case 10:
            echo "At $i quitting";
            break 2;
    }
    $i++;
}
do{
    if($i==$max/2){
        echo "<h1>$i</h1>";
    }
    echo "$i<br>";
    $i+=2;
}while ($i<=$max);
?>