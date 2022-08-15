<?php
$error = '';
$dataList = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
if(empty($dataList)){
    $error = 'Vartotoju sarasas tuscias';
}else{
    usort($dataList, function($a, $b) {
    return $a['pavarde'] > $b['pavarde'];
    });

}

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
<?php include 'header.php' ?>
    <div>
        <h1>Klientu sarasas</h1>
        <p><?=$error?></p>
        <form method="get">
            <?php foreach($dataList as $index => $val): ?>
                
                <?php foreach($val as $i => $a): ?>
                    <li><?= $i. ': '.$a?></li>
                    <?php endforeach ?>
                    <a class="btn" href="http://localhost/-php-homework-/-php-homework/bank-version-01/succes-istrinta.php?index=<?= $index ?>">Istrinti</a>
                    <a class="btn" href="http://localhost/-php-homework-/-php-homework/bank-version-01/prideti.php?index=<?= $index ?>" >Prideti liesu</a>
                    <a class="btn" href="http://localhost/-php-homework-/-php-homework/bank-version-01/atimti.php?index=<?= $index ?>">Atimti liesu</a>
                    <?php endforeach ?>
                </form>
        
    </div>
    <a class="btnnew" href="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php">Grizti i pradzia</a>
</body>
</html>

