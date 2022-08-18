<?php
$error = '';
$dataList = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);

usort($dataList, function($a, $b){return ($a['pavarde'] < $b['pavarde']) ? -1 : 1;});

$data = $dataList;

file_put_contents(__DIR__ . '/data.json', json_encode($data));


if(empty($dataList)){
    $error = 'Vartotoju sarasas tuscias';
}


?>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>
    <section>
        <?php include 'header.php' ?>
    </section>
    <section class="container col-12 row">
        <div class="container form">
            <h1 class="title">Klientų sąrašas :</h1>
            <p><?=$error?></p>
            <?php foreach($data as $index => $val): ?>
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