<?php
$age = 12;
if ($age>=18) {
    $result =  'Tu es majeur';
} else {
    $result =  'Tu n\'es pas majeur';
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
    // echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    echo $result;
    
?>
    
</body>
</html>