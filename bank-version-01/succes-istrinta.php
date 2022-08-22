<?php
if(isset($_GET)){
    $index = $_GET['index'];
}


    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    $result = '';
    foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
        if($index == $i){
            if($a['pinigai'] == 0){
                unset($data[$i]);
                file_put_contents(__DIR__ . '/data.json', json_encode($data));            
                $result = $a['vardas'] . "\r" . $a['pavarde'] ."\r" . 'Sekmingai istrintas';
            }else{
                $result = 'Nepaviko istrinti vartuotojo, saskaitoje yra pinigu likutis';

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
            <h1><?= $result?></h1>
        </div>
        <div class="container row col-12">
            <a class="btn back" href="http://localhost/-php-homework-/-php-homework/bank-version-01/list.php">Grižti į
                sąrašą</a>
        </div>
    </section>
</body>

</html>