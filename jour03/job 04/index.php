<?php
$str = "Dans l'espace, personne ne vous entend crier.";


echo "le nombre de caractère est de : " . strlen(($str)) . "<br />";
 



$Str = "Dans l'espace, personne ne vous entend crier.";
$nombreCaracteres = 0;
for ($i = 0; $i < strlen($Str); $i++) {
    $nombreCaracteres++;
}

echo "Le nombre de caractères est de: " . $nombreCaracteres;

?>