<?php
// if(isset($_GET)){
//     $index = implode($_GET);

// }
// $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);

// foreach($data as $i => $a){
//     if($index == $i){
//         unset($data[$i]);
//     }
// }
// $data = json_encode($data);
// file_put_contents(__DIR__ . '/data.json', json_encode($data));
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
        <form method="get">
            <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $index => $val): ?>
                
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

