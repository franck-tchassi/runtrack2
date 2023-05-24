<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_POST)){
    $argument = count($_POST);
    echo "Le nombre d’arguments POST envoyé est : " . $argument ;
    }else{
        echo "Le nombre d’arguments est vide" ;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom"> <br>
        <label for="prenom">prénom</label>
        <input type="text" name="prenom" id="prenom"> <br>
        <input type="submit" value="send">
    </form>
</body>
</html>