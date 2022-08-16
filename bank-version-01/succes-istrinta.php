<?php
$result = '';
if(isset($_GET)){
    $index = implode($_GET);
}


    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
        if($a['pinigai'] == 0){
            unset($data[$i]);
            file_put_contents(__DIR__ . '/data.json', json_encode($data));            
            $result = $a['vardas'] . "\r" . $a['pavarde'] ."\r" . 'Sekmingai istrintas';
        }else{
            $result = 'Nepaviko istrinti vartuotojo, saskaitoje yra pinigu likutis';
            
        }
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
        <h1><?= $result?></h1>
        </div>
        <div class="container row col-12">
            <a class="btn back" href="http://localhost/-php-homework-/-php-homework/bank-version-01/list.php">Grižti į sąrašą</a>
        </div>
    </section>
</body>
</html>