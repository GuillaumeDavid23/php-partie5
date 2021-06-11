<?php
//Tableau associatif
    $department = array(
        80 => 'Somme',
        62 => 'Pas-de-Calais',
        '02'   => 'Aisne',
        59  => 'Nord',
        60  => 'Oise'
    );
    $department[51] = 'Marne';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 5</title>
</head>
<body>
    <?php
    //Ajoute Marne dans le tableau
       print_r($department["02"]);
    ?>
</body>
</html>