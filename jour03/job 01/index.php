<?php

$tab = [200, 2004, 173, 98, 171, 404, 459];

for ($i = 0; $i < count($tab); $i++) {
    if($i==0 ){
        if($tab[$i] % 2 == 0){
            echo $tab[$i] . " " . "est pair <br />";
        }else{
            echo $tab[$i] . " " . "est impair <br />";
        }
        
    }
    elseif($i==1){
        if($tab[$i] % 2 == 0){
            echo $tab[$i] . " " . "est pair <br />";
        }else{
            echo $tab[$i] . " " . "est impair <br />";
        }

    }
    elseif($i==2){
        if($tab[$i] % 2 == 0){
            echo $tab[$i] . " " . "est pair <br />";
        }else{
            echo $tab[$i] . " " . "est impair <br />";
        }
    }
    elseif($i==3){
        if($tab[$i] % 2 == 0){
            echo $tab[$i] . " " . "est pair <br />";
        }else{
            echo $tab[$i] . " " . "est impair <br />";
        }
        
    }
    elseif($i==4){
        if($tab[$i] % 2 == 0){
            echo $tab[$i] . " " . "est pair <br />";
        }else{
            echo $tab[$i] . " " . "est impair <br />";
        }
        
    }
    elseif($i==5){
        if($tab[$i] % 2 == 0){
            echo $tab[$i] . " " . "est pair <br />";
        }else{
            echo $tab[$i] . " " . "est impair <br />";
        }
        
    }
    else{
        if($tab[$i] % 2 == 0){
            echo $tab[$i] . " " . "est pair <br />";
        }else{
            echo $tab[$i] . " " . "est impair <br />";
        }
    }
}
/*                 ou cette methode      */
echo "<br />";
foreach ($tab as $number) {
    if ($number % 2 == 0) {
        echo $number . " est paire<br />";
    } else {
        echo $number . " est impaire<br />";
    }
} 


?>