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

    header('Location: http://localhost/-php-homework-/-php-homework/bank-version-01/succes-prideta.php');
    die;
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
    <section>
        <?php include 'header.php' ?>
    </section>
    <section class="container col-12 row">
        <div class="container form">
            <h1 class="title">Prideti pinigų:</h1>
            <div>
                <form action="" method="post">
                    <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a) : ?>
                    <?php if($i == $index) :?>
                    <?php foreach($a as $i => $val) : ?>
                    <li><span class="list-title"><?= $i?> : </span><span class="list-content"><?=$val?></span></li>
                    <?php endforeach ?>
                    <?php endif ?>
                    <?php endforeach ?>
                    <div style="margin: 20px 0;">
                        <p class="list-title">Prideti pinigu:</p>
                        <input class="form-input input-small" type="number" name="amount"
                            placeholder="Iveskite norima suma" />
                    </div>
                    <div>
                        <button class="btn add" href="succes-prideta.php" type="submit">Prideti</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container row col-12">
            <a class="btn back" href="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php">Grižti į
                pradžia</a>
            <a class="btn back" href="http://localhost/-php-homework-/-php-homework/bank-version-01/list.php">Grižti į
                sąrašą</a>
        </div>
    </section>

</body>

</html>