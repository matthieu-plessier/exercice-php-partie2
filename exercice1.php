<?php
$age=43;

if ($age >= 18) {
    $result 'vous êtes majeur';
}else {
    $result 'vous êtes mineur';
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
    <?php

    echo $result;
    // if ($age >= 18) {
    //     echo 'Vous êtes majeur.';
    // } else {
    //     echo 'Vous êtes mineur.';
    // }
    
    ?>
</body>
</html>