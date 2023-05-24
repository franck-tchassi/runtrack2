<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!empty($_POST)) {
       
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';

        foreach ($_POST as $argument => $valeur) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($argument) . '</td>';
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo "Aucun argument.";
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
    
    <form action=" <?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
        <label for="nom">nom</label>
        <input type="text" name="nom" id="prenom"  placeholder="entrer votre nom"><br>
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="nom" placeholder="entrer votre prenom"><br>
        <input type="submit" value="submit" >  
    </form>
</body>
</html>