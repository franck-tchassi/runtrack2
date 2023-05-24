<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); 

    if (preg_match('/[a-z]/i', $char)) {
        if (in_array($char, array('a', 'e', 'i', 'o', 'u', 'y'))) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>consonnes</th>
                <th>voyelles</th>
            </tr>

            <tbody>

                    <tr>
                        <td><?php echo $dic["consonnes"]++ ?></td>
                        <td><?php echo $dic["voyelles"]++ ?></td>
                    </tr>
                
            </tbody>
        </thead>
        
    </table>
</body>
</html>