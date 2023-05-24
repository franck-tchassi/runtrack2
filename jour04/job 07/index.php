<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']     ?>" method="GET">
        <label for="largeur">largeur :</label>
        <input type="number" name="largeur" id="largeur"> <br>
        <label for="hauteur">hauteur   :</label>
        <input type="number" name="hauteur" id="hauteur"> <br>
        <input type="submit" value="validez">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!empty($_GET)){
        if ($_GET['largeur'] == 10 && $_GET['hauteur'] == 5){
            echo "|\|" ;
            
            
        }
        elseif ($_GET['largeur'] == 20 && $_GET['hauteur'] == 10){
            echo "*****" . "<br \>";
            echo "*****" . "<br \>";
            echo "*****";
        }else{
            echo "longueur et largeur incorrect";
        }
    }else{
        echo "aucun arguments ";
    }
}