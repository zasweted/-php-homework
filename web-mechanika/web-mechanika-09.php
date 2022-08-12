<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $checked = count($_POST['c'] ?? []);
    header('Location : http://localhost/-php-homework-/-php-homework/web-mechanika/web-mechanika-09.php?all='.$checked);
    die;
}



$color = isset($_GET['all']) ? 'white' : 'black';
$ak = range('A', 'J');
$count = rand(3, 10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color ?>">
    <?php if(isset($_GET['all'])): ?>

        <a href="http://localhost/-php-homework-/-php-homework/web-mechanika/web-mechanika-09.php">BACK</a>

        <h1>ALL CHECKED IS : <?= $_GET['all'] ?></h1>

        <?php else: ?>
    <div style="background-color: white;">

        <form action="http://localhost/-php-homework-/-php-homework/web-mechanika/web-mechanika-09.php" method="post">
        
            <?php
                foreach(range(1, $count) as $number) : ?>
                    <input type="checkbox" name="c[]" /><?= $ak[$number -1] ?>
            <?php endforeach ?>    
        
        
        <button type="submit">GO</button>
        </form>

    </div>
    <?php endif ?>
</body>
</html>