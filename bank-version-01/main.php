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
        $re = '/^[0-9][0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[0-9]{4}$/';
        
        
        preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, false);

        // Print the entire match result
        var_dump($str) ; 
        echo '<br>';
        var_dump($matches);
        echo '<br>';
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
        $formError =  'Yra klaidu formoje';
    }else {
        $userPost = $_POST ?? 'ERROR';

        $data = json_decode(file_get_contents(__DIR__ . '/data.json'));
        
        $data[] = $userPost;
        
        file_put_contents(__DIR__ . '/data.json', json_encode($data));

        header('Location: http://localhost/-php-homework-/-php-homework/bank-version-01/succes.php');
        die;
    }


}
/*pirmas skaičius nurodo lytį ir, jei neklystu, amžių: 4 ir 3 - tai dvidešimtajame amžiuje gimę žmonės. 5 ir 6 - dvidešimtpirmajame. Programa neturėtų leisti pirmoje vietoje rašyti didesnių skaičių už 6. Antras ir trečias skaičiai gali būti bet kokie, kadangi jie nurodo metus. Ketvirtas ir penktas skaičiai turi būti ne didesni už 12, kadangi tai mėnesiai. Šeštas ir septintas skaičiai negali būti didesni už 31, nes tai didžiausias galimas dienų skaičius mėnesyje. Keturi paskutiniai skaičiai gali būti bet kokie. Programuojant reikia visa tai įvertinti. Kitokių asmens kodo tikrinimo programų nelabai įsivaizduoju. Tiesa, dar reikėtų įvertinti tai, kad mėnesis ir diena negali būti 00.
 */


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
    <?php include 'header.php' ?>
    <div class="container row col-6 pos">
        <h1 class="title">Naujos banko saskaitos atidarimas</h1>
        <fieldset>
            <form class="form" action="http://localhost/-php-homework-/-php-homework/bank-version-01/main.php" method="post">
                <input type="text" name="vardas" value="<?= $vardas?>"  placeholder="Vardas" />
                <div style="color: red;"><?= $errors['vardas'] ?></div>
                <input type="text" name="pavarde" value="<?= $pavarde ?>" placeholder="Pavarde" />
                <div style="color: red;"><?= $errors['pavarde'] ?></div>
                <input type="text" name="asmensKodas" value="<?= $asmensKodas ?>" placeholder="Asmens Kodas" />
                <div style="color: red;"><?= $errors['asmensKodas'] ?></div>
                <input type="number" name="pinigai" value="0" hidden />
                <input type="text" name="iban" value="<?= iBAN() ?>"   readonly />
                <button class="btn" type="submit" >Sukurti</button>
                <div style="color: red;"><?= $formError ?></div>
            </form>
        </fieldset>
    </div>


    <a class="btn" href="http://localhost/-php-homework-/-php-homework/bank-version-01/list.php">Perziureti Sarasa</a>
</body>
</html>