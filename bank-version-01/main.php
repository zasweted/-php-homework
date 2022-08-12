<?php

if (!file_exists(__DIR__ . '/data.json')){
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}

if($_POST == $_SERVER['REQUEST_METHOD']) {
    $userName = $_POST['vardas'] ?? 'Laba diena';

    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    $data[] = $userName;
    file_put_contents(__DIR__ . '/data.json', json_encode($data));

    header('Location: http://localhost/-php-homework-/-php-homework/bank-version-01/main.php');
    die;
}
$_18digits ='';

for($i = 0; $i < 18; $i++) {
    $_18digits .= rand(0, 9);
}
$_IBAN = 'LT'. $_18digits;
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
        <form class="form" action="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php" method="post">
            <input type="text" name="vardas"  placeholder="Vardas" />
            <input type="text" name="pavarde" placeholder="Pavarde" />
            <input type="text" name="asmensKodas" placeholder="Asmens Kodas" />
            <input type="text" name="iban" value="<?= $_IBAN ?>" placeholder="IBAN" readonly />
            <button type="submit">Sukurti</button>
        </form>
    </div>

</body>
</html>