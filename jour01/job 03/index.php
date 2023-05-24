
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mes_données = [
        ['type'=> 'int', 'nom'=> 'prix', 'valeur'=> 50],
        ['type'=> 'float', 'nom'=> 'pi', 'valeur'=> 3.14],
        ['type'=> 'string', 'nom'=> 'Name', 'valeur'=> 'franck'],
        ['type'=> 'boléan', 'nom'=> 'est_vrai', 'valeur'=> true]
    ];
    ?>
    <header>
        <table>
            <thead>
                <tr>
                    <th>type</th>
                    <th>nom</th>
                    <th>valeur</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($mes_données as $ligne):  ?>
                    <tr>
                        <td><?php echo $ligne['type']; ?></td>
                        <td><?php echo $ligne['nom']; ?></td>
                        <td><?php echo $ligne['valeur']; ?></td>
                    </tr>
                <?php endforeach; ?>
                
           </tbody>
        </table>
    </header>
    
</body>
</html>