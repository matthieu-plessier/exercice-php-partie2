<?php
$isOk = true;
if ($isOk) {
    $result =  'c\'est pas bon !!!';
} else {
    $result =  'c\'est ok !!';
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
    // echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
    echo $result;
    
?>
    
</body>
</html>