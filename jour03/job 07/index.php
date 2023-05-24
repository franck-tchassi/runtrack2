<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$length = strlen($str);


$premierCaractere = $str[0];

for ($i = 1; $i < $length; $i++) {
    $str[$i - 1] = $str[$i];
}


$str[$length - 1] = $premierCaractere;

echo $str;


?>