<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']     ?>" method="POST">
        <label for="user">username :</label>
        <input type="text" name="user" id="user"> <br>
        <label for="pwd">password :</label>
        <input type="password" name="pwd" id="pwd"> <br>
        <input type="submit" value="validez">
    </form>
</body>
</html>




<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST)){
        if ($_POST['user'] =='John' && $_POST['pwd'] =='Rambo'){
            echo "C’est pas ma guerre.";
        }else{
            echo "Votre pire cauchemar.";
        }
    }else{
        echo "aucun arguments ";
    }
}



?>