<?php
if(isset($_GET)){
    $index = $_GET['index'];
}
$error = '';
if('POST' == $_SERVER['REQUEST_METHOD']) {
    $cashOperation = $_POST['amount'];
    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
        if($index == $i){
            if(empty($cashOperation)){
                $error = 'Ivesties laukas tuscias';
        }else{
            $data[$i]['pinigai'] += $cashOperation;
            file_put_contents(__DIR__ . '/data.json', json_encode($data));
        
            header('Location: http://localhost/-php-homework-/-php-homework/bank-version-01/succes-prideta.php');
            die;
            
        }
    }
}
}

?>
<?php include 'head.php' ?>

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
                    <div class="form-error"><?=$error?></div>
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