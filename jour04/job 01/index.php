<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    if (!empty($_GET)) {
        
        $Arguments = count($_GET);

        
        echo "Le nombre d'arguments GET envoyé est : " . $Arguments;
    } else {
        echo "Aucun argument n'a été envoyé via la méthode GET.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon formulaire</title>
</head>
<body>
    
    <form action=" <?php echo $_SERVER['PHP_SELF']  ?>" method="GET">
        <label for="nom">nom</label>
        <input type="text" name="nom" id="prenom"  placeholder="entrer votre nom"><br>
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="nom" placeholder="entrer votre prenom"><br>
        <input type="submit" value="submit" >
        
        

        
    </form>
    
</body>
</html>

