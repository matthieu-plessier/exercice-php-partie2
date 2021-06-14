<?php
$isOk = false;
if ($isOk == false) {
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
    // echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    echo $result;
    
?>
    
</body>
</html>