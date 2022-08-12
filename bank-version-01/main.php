<?php

if (!file_exists(__DIR__ . '/data.json')){
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}

if('POST' == $_SERVER['REQUEST_METHOD']) {
    $userPost = $_POST ?? 'ERROR';

    $data = json_decode(file_get_contents(__DIR__ . '/data.json'));

    $data[] = $userPost;
    
    file_put_contents(__DIR__ . '/data.json', json_encode($data));

    header('Location: http://localhost/-php-homework-/-php-homework/bank-version-01/succes.php');
    die;
}

// function nameValidation(){
//     $name = $_POST['vardas'];
//     $nameLen = strlen($name);
//     if($nameLen < 3){
//         echo 'trumpas vardas';
//     }else {
//         return $_POST['vardas'];
//     }
// };


/* IBAN generator start */
$_18digits ='';

for($i = 0; $i < 18; $i++) {
    $_18digits .= rand(0, 9);
}
$_IBAN = 'LT'. $_18digits;
/* IBAN generator end */


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
    
    <div class="container row col-6 pos">
        <h1 class="title">Naujos banko saskaitos atidarimas</h1>
        <fieldset>
            <form class="form" action="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php" method="post">
                <input type="text" name="vardas" value=""  placeholder="Vardas" />
                <input type="text" name="pavarde" value="" placeholder="Pavarde" />
                <input type="text" name="asmensKodas" value="" placeholder="Asmens Kodas" />
                <input type="number" name="pinigai" value="0" hidden />
                <input type="text" name="iban" value="<?= $_IBAN ?>" hidden readonly />
                <button class="btn" type="submit">Sukurti</button>
            </form>
        </fieldset>
    </div>


    <a class="btn" href="http://localhost/-php-homework-/-php-homework/bank-version-01/list.php">Perziureti Sarasa</a>
</body>
</html>