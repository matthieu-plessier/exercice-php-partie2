<?php
$age = 12;
$gender = 'femme';

if ($age>=18 && $gender == 'homme') {
    $result = 'Vous êtes un homme et vous êtes majeur';
} elseif ($age<=18 && $gender == 'homme') {
    $result = 'Vous êtes un homme et vous êtes mineur';
} elseif ($age>=18 && $gender == 'femme') {
    $result = 'Vous êtes une femme et vous êtes majeur';
} else  {
    $result = 'Vous êtes une femme et vous êtes mineur';
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $result;
    
    
    ?>
    
</body>
</html>