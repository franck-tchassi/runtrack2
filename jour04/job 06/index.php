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
        <label for="nombre">nombre :</label>
        <input type="number" name="nombre" id="nombre"> <br>
        <input type="submit" value="validez">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!empty($_GET)){
        if ($_GET['nombre'] % 2 == 0){
            echo "Nombre pair";
        }else{
            echo "Nombre impair";
        }
    }else{
        echo "aucun arguments ";
    }
}