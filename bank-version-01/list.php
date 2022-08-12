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
    <div>
        <h1>Klientu sarasas</h1>
        <form method="post">
            <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $val): ?>
                <button class="btn">Istrinti</button>
                <a class="btn" href="#" name="<?=$val?>">Prideti liesu</a>
                <a class="btn" href="#">Atimti liesu</a>
                        
                <?php foreach($val as $i => $a): ?>
                    <li><?= $i. ': '.$a?></li>
                    <?php endforeach ?>
                <?php endforeach ?>
                </form>
        
    </div>
    <a class="btnnew" href="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php">Grizti i pradzia</a>
</body>
</html>

