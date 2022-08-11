<?php


$getColor = $_GET['color'] ?? null;
if($getColor == 1){
    $color = '#990000';
    $fontColor = '#000';
}else{
    $color = '#000';
    $fontColor = '#fff';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_Mechanika_01t</title>
</head>
<body style="background-color:<?= $color ?>; display: flex; flex-direction: column; justify-content: center; align-items: center">
        <a style="color:<?= $fontColor ?>; font-size: 30px" href="?color=1">Crimson</a>
        <a style="color:<?= $fontColor ?>; font-size: 30px" href="http://localhost/-php-homework-/-php-homework/web-mechanika/web-mechanika-01.php" action="web-mechanika.php">Black</a>
</body>
</html>