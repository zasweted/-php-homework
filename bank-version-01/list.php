<?php
$error = '';
$dataList = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
if(empty($dataList)){
    $error = 'Vartotoju sarasas tuscias';
}
// else{
//     usort($dataList, function($a, $b) {
//     return $a['pavarde'] > $b['pavarde'];
//     });

// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>

</head>

<body>
    <section>
        <?php include 'header.php' ?>
    </section>
    <section class="container col-12 row">
        <div class="container form">
            <h1 class="title">Klientų sąrašas :</h1>
            <p><?=$error?></p>
            <?php foreach($dataList as $index => $val): ?>
            <form method="get">
                <div class="inner-form">
                    <?php foreach($val as $i => $a): ?>
                    <li><span class="list-title"><?= $i?> : </span><span class="list-content"><?=$a?></span></li>
                    <?php endforeach ?>
                    <div class="btn-inner">
                        <a class="btn del"
                            href="http://localhost/-php-homework-/-php-homework/bank-version-01/succes-istrinta.php?index=<?= $index ?>">Ištrinti
                            vartuotoja</a>
                        <a class="btn add"
                            href="http://localhost/-php-homework-/-php-homework/bank-version-01/prideti.php?index=<?= $index ?>">Prideti
                            liešas</a>
                        <a class="btn dec"
                            href="http://localhost/-php-homework-/-php-homework/bank-version-01/atimti.php?index=<?= $index ?>">Atimti
                            liešas</a>
                    </div>
                </div>
            </form>
            <?php endforeach ?>


        </div>
        <div class="container col-12 row">
            <a class="btn back" href="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php">Grižti į
                pradžia</a>
        </div>
    </section>
</body>

</html>