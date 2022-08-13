<?php
if(isset($_GET)){
    $index = implode($_GET);
}
if('POST' == $_SERVER['REQUEST_METHOD']) {
    $cashOperation = $_POST ?? $data[$i]['pinigai'];

    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
        if($index == $i){
            $data[$i]['pinigai'] += implode($cashOperation);
        }
    }
    file_put_contents(__DIR__ . '/data.json', json_encode($data));
    print_r($cashOperation);
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
<body>
    <h1>Prideti pinigu</h1>
    <div>
        <form action="" method="post">
            <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a) : ?>
                <?php if($i == $index) :?>
                    <?php foreach($a as $val) : ?>
                        <li><?= $val ?></li>
                        <?php endforeach ?>
                        <?php endif ?>
                        <?php endforeach ?>
                        Prideti pinigu: <input type="number" name="amount" placeholder="Iveskite norima suma" />
                        <button type="submit">Prideti</button>

        </form>

    </div>
    <a href="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php">Grizti i pradzia</a>
    <a href="http://localhost/-php-homework-/-php-homework/bank-version-01/list.php">Grizti i sarasa</a>
</body>
</html>