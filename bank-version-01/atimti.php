<?php

if(isset($_GET)){
    $index = $_GET['index'];
}
$error = '';
$pinigai = '';
if('POST' == $_SERVER['REQUEST_METHOD']) {
    $cashOperation = $_POST['pinigai'];
    print_r($cashOperation);

    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
        if($index == $i){
            $num = intval($cashOperation);
            $likutis = $data[$i]['pinigai'] - $num;
            if($likutis < 0){
                $error = 'Galutinis likutis maziau uz 0 <br> Iveskit kita suma';
                $pinigai = $_POST['pinigai'];
            }else{
                if(empty($cashOperation)){
                    $error = 'Ivesties laukas tuscias';
                }else{
                    $data[$i]['pinigai'] -= $num;
                    file_put_contents(__DIR__ . '/data.json', json_encode($data));
                    header('Location: http://localhost/-php-homework-/-php-homework/bank-version-01/succes-atimta.php');
                    die;
                }
            }
        }
    }
    

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
            <h1 class="title">Nuskaičioti pinigų:</h1>
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
                        <p class="list-title">Nuskaičioti pinigų:</p>
                        <input class="form-input input-small" type="number" name="pinigai" value="<?= $pinigai?>"
                            placeholder="Iveskite norima suma" />
                    </div>
                    <div class="form-error"><?=$error?></div>
                    <div>
                        <button class="btn dec" href="succes-atimta.php" type="submit">Nuskaičioti</button>
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