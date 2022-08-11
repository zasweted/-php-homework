<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: http://localhost/-php-homework-/-php-homework/web-mechanika/web-mechanika-07.php');
    die;
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
<body style="background-color:<?= $_SERVER['REQUEST_METHOD'] == 'POST' ? '#FAFA33' : 'lime' ?>">
    <div>
        <form action="http://localhost/-php-homework-/-php-homework/web-mechanika/web-mechanika-07.php" method="get"></form>
            <button type="submit">GET</button>
    </div>
    <div>
        <form action="http://localhost/-php-homework-/-php-homework/web-mechanika/web-mechanika-07.php" method="post"></form>
            <button type="submit">POST</button>
    </div>
</body>
</html>