<?php

if (!file_exists(__DIR__ . '/data.json')){
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}

if('POST' == $_SERVER['REQUEST_METHOD']) {
    $userName = $_POST['vardas'] ?? 'Laba diena';
    $userSurname = $_POST['pavarde'] ?? 'Laba diena';
    $userPersonalId = $_POST['asmensKodas'] ?? 'Laba diena';
    $userIban = $_POST['iban'] ?? 'Laba diena';

    $data = json_decode(file_get_contents(__DIR__ . '/data.json'));


    
    $data[] = ['user_name' => $userName, 'user_surname' => $userSurname, 'user_personal_id' => $userPersonalId, 'user_iban' => $userIban];
    // foreach($data as $a){
    //     foreach($keys as $key) {
    //         if($key == 'user_name'){
    //             $data[$a][$key] = $userName;
    //         }else{
    //             if($key == 'user_surname'){
    //                 $data[$a][$key] = $userSurname;
    //             }else {
    //                 if($key == 'user_personal_id'){
    //                     $data[$a][$key] = $userPersonalId;
    //                 }else{
    //                     $data[$a][$key] = $userIban;
    //                 }
    //             }
    //         }
    //     }
    // }
    
    file_put_contents(__DIR__ . '/data.json', json_encode($data));

    header('Location: http://localhost/-php-homework-/-php-homework/bank-version-01/succes.php');
    die;
}




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
                <input type="text" name="vardas"  placeholder="Vardas" />
                <input type="text" name="pavarde" placeholder="Pavarde" />
                <input type="text" name="asmensKodas" placeholder="Asmens Kodas" />
                <input type="text" name="iban" value="<?= $_IBAN ?>" placeholder="IBAN" readonly />
                <button type="submit">Sukurti</button>
            </form>
        </fieldset>
    </div>


    <a href="http://localhost/-php-homework-/-php-homework/bank-version-01/list.php">List</a>
</body>
</html>