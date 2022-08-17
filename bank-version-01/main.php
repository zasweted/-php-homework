<?php

if (!file_exists(__DIR__ . '/data.json')){
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}



$vardas = $pavarde = $asmensKodas ='';
$errors = ['vardas' => '', 'pavarde' => '', 'asmensKodas' => ''];
$formError ='';
if(isset($_POST['vardas'])) {

    //vardo tikrinimas
    if(empty($_POST['vardas'])){
        $errors['vardas'] = 'Reikia ivesti varda';
    } else {
        $vardas = $_POST['vardas'];
    if(strlen($vardas) < 3 || $vardas == strtolower($vardas)){
        $errors['vardas'] = 'Vardas negali buti is mazos raides arba trumpesnis uz 3 simbolius';
        }
    }

    // pavardes tikrinimas
    if(empty($_POST['pavarde'])){
        $errors['pavarde'] = 'Reikia ivesti pavarde';
    }else{
        $pavarde = $_POST['pavarde'];
    if(strlen($pavarde) < 3 || $pavarde == strtolower($pavarde)){
            $errors['pavarde'] = 'Pavarde negali buti is mazos raides arba trumpesne uz 3 simbolius';
        }
    }

    //asmens kodo tikrinimas
    if(empty($_POST['asmensKodas'])){
        $errors['asmensKodas'] = 'Reikia ivesti asmens koda';
    }else{
        $str = $_POST['asmensKodas'];
        $re = '/^[3-6][0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[0-9]{4}$/';
        
        
        preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, false);

        if($matches == false){
            $errors['asmensKodas'] = 'Asmens kodas netaisingas';
        }else{
            foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $a){
                $personalID = $_POST['asmensKodas'];
                    if($personalID == in_array($personalID, $a)){
                        $errors['asmensKodas'] = 'Toks asmens kodas jau egzistuoja';
                    }
            }
        }
    }

    if(array_filter($errors)) {
        $formError =  'Forma Neužpildita';
    }else {
        $userPost = $_POST ?? 'ERROR';

        $data = json_decode(file_get_contents(__DIR__ . '/data.json'));
        
        $data[] = $userPost;
        
        file_put_contents(__DIR__ . '/data.json', json_encode($data));

        header('Location: http://localhost/-php-homework-/-php-homework/bank-version-01/succes.php');
        die;
    }


}



function iBAN(){
    $_18digits ='';

    for($i = 0; $i < 18; $i++) {
        $_18digits .= rand(0, 9);
    }
    $_IBAN = 'LT'. $_18digits;
    return $_IBAN;
    
};

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
            <h1 class="title">Naujos banko saskaitos atidarimas :</h1>
            <form action="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php" method="post">
                <div class="form">
                    <input class="form-input" type="text" name="vardas" value="<?= $vardas?>" placeholder="Vardas" />
                    <input class="form-input" type="text" name="pavarde" value="<?= $pavarde ?>"
                        placeholder="Pavarde" />
                    <input class="form-input" type="text" name="asmensKodas" value="<?= $asmensKodas ?>"
                        placeholder="Asmens Kodas" />
                    <input type="number" name="pinigai" value="0" hidden />
                    <input type="text" name="iban" hidden value="<?= iBAN() ?>" readonly />
                </div>
                <div class="error-container">
                    <div class="form-error"><?= $errors['vardas'] ?></div>
                    <div class="form-error"><?= $errors['pavarde'] ?></div>
                    <div class="form-error"><?= $errors['asmensKodas'] ?></div>
                    <div class="form-error"><?= $formError ?></div>
                </div>
                <div class="form">
                    <button class="btn back submit" type="submit">Sukurti</button>
                </div>
            </form>
        </div>
        <div class="container row col-12">
            <a class="btn back" href="http://localhost/-php-homework-/-php-homework/bank-version-01/list.php">Klientų
                sąrašas</a>
        </div>
    </section>




</body>

</html>