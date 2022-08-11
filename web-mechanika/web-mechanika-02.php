<?php

// $getColor = $_GET['color'] ?? 'white';

function doColor(){
    if(!isset($_GET['color'])) {
        return 'black';
    }
    $color = $_GET['color'];
    
    if(preg_match('/\#[0-9A-F]{6}/i', $color)) {
        return $color;
    }
    if(preg_match('/[0-9A-F]{6}/i', $color)) {
        return '#'.$color;
    }
    return $color; // idedam $doColor i body style.
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_Mechanika_02</title>
</head>
<body style="background-color:<?= doColor() ?>; display: flex; flex-direction: column; justify-content: center; align-items: center">  
        <a style="color: #000; font-size: 30px" href="http://localhost/-php-homework-/-php-homework/web-mechanika/web-mechanika-02.php?color=grey">Eat Me!!</a>
</body>
</html>