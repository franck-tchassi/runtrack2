<?php
$str= "I'm sorry Dave I'm afraid I can't do that.";

for ($i=0; $i<strlen($str); $i++){
    $caract = strtolower($str[$i]); // Convertir le caractère en minuscule pour la comparaison
    if (in_array($caract, ['a', 'e', 'i', 'o', 'u', 'y'])){
        echo $str[$i];
    }
        
}

?>