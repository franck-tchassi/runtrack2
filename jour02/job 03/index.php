<?php

$nombre =100;

for ($i= 0; $i<=$nombre; $i++){
    if ($i==42){
        echo "La plateforme_" . "<br />";
    }
    elseif($i>=0 && $i<=20){

        echo "<i>" . $i . "</i><br />" ;

    }elseif($i>=25 && $i<=50){
        echo "<u>" . $i . "</u><br />" ;
    }else{
        echo $i . "<br />" ;
    }
    
}
?> 

