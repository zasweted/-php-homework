<?php
$klaida = '';
$paviko = '';
if(isset($_GET)){
    $index = implode($_GET);
}


    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
        if($index == $i && $a['pinigai'] == 0){
            unset($data[$i]);
            
            $paviko = $a['vardas'] . ' ' . $a['pavarde'] . 'Sekmingai istrintas';
        }else{
            
            $klaida = 'Negalima istrinti saskaitos. Saskaitoje yra pinigu.';
        }
    }
    file_put_contents(__DIR__ . '/data.json', json_encode($data));
    

    

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
<?php include 'header.php' ?>
<p><?=$klaida ?></p>
<p><?=$paviko ?></p>
         

    <a href="list.php">Grizti atgal</a>
</body>
</html>