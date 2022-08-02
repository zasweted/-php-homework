<style>
    .green {
        color: green;
    }

    .red {
        color: red;
    }

    .blue {
        color: blue;
    }
</style>

<?php
echo '=====1=====';
echo '<br>';

$vardas = 'Aleksandr';
$pavarde = 'Vasiljev';
$gimymoMetai = 1986;
$einamiejiMetai = 2022;
$metai = $einamiejiMetai - $gimymoMetai;

echo "As esu $vardas $pavarde. Man yra $metai metai(u) ";
echo '<br>';
echo '=====2=====';
echo '<br>';

$one = rand(1, 5);
echo '<br>';
$two = rand(1, 5);
echo '<br>';
echo $one;
echo '<br>';
echo $two;
echo '<br>';
if($one > $two){
    echo round($one / $two, 2);
}else{
    echo round($two / $one, 2);
}
echo '<br>';
echo '=====3=====';
echo '<br>';
$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);
echo "a $a";
echo '<br>';
echo "b $b";
echo '<br>';
echo "c $c";
echo '<br>';

if($a < $b && $b < $c) {
    echo "answer : b $b";
}else{
    if($c < $b && $b < $a){
        echo "answer : b $b";
        }else{
            if($c < $a && $a < $b) {
                echo "answer : a $a";
                }else{
                    if($b < $a && $a < $c) {
                        echo "answer : a $a";
                    }else{
                        if($b < $c && $c < $a){
                            echo "answer : c $c";
                        }else{
                            if($a < $c && $c < $b){
                                echo "answer : c $c";
                            }
                        }

                }
            }
        }
    }


echo '<br>';
echo '=====4=====';
echo '<br>';

$x = rand(1, 10);
echo $x;
echo '<br>';
$y = rand(1, 10);
echo $y;
echo '<br>';
$z = rand(1, 10);
echo $z;
echo '<br>';

echo $x + $y > $z && $y + $z > $x && $x + $z > $y ? 'Galima' : 'Nigalima';


echo '<br>';
echo '=====5=====';
echo '<br>';

$A = rand(0, 2);
echo "A: $A";
echo '<br>';
$B = rand(0, 2);
echo "B: $B";
echo '<br>';
$C = rand(0, 2);
echo "C: $C";
echo '<br>';
$D = rand(0, 2);
echo "D: $D";
echo '<br>';

$zeroes = 0;
$ones = 0;
$twoes = 0;
if($A === 0){
    $zeroes++;
}else{
    if($A === 1){
        $ones++;
    }else{
        if($A === 2){
            $twoes++;
        }
    }
}
if($B === 0){
    $zeroes++;
}else{
    if($B === 1){
        $ones++;
    }else{
        if($B === 2){
            $twoes++;
        }
    }
}
if($C === 0){
    $zeroes++;
}else{
    if($C === 1){
        $ones++;
    }else{
        if($C === 2){
            $twoes++;
        }
    }
}
if($D === 0){
    $zeroes++;
}else{
    if($D === 1){
        $ones++;
    }else{
        if($D === 2){
            $twoes++;
        }
    }
}

echo "Zeroes: $zeroes<br>Ones: $ones<br> Twoes: $twoes";
echo '<br>';
echo '=====6=====';
echo '<br>';

$randInHTag = rand(1, 6);

echo "<h3>$randInHTag</h3>";

echo '<br>';
echo '=====7=====';
echo '<br>';
$vienas = rand(-10, 10);
$du = rand(-10, 10);
$trys = rand(-10, 10);
echo"Vienas: $vienas <br>";
echo"Du: $du <br>";
echo"Trys: $trys <br>";
if($vienas < 0){
    echo '<h1 style="color: green;">'.$vienas.'</h1>';
}else{
    if($vienas === 0){
        echo '<h1 style="color: red;">'.$vienas.'</h1>';
    }else{
        echo '<h1 style="color: blue;">'.$vienas.'</h1>';;
    }
}
if($du < 0){
    echo '<h1 style="color: green;">'.$du.'</h1>';
}else{
    if($du === 0){
        echo '<h1 style="color: red;">'.$du.'</h1>';
    }else{
        echo '<h1 style="color: blue;">'.$du.'</h1>';;
    }
}

if($trys < 0){
    echo '<h1 style="color: green;">'.$trys.'</h1>';
}else{
    if($trys === 0){
        echo '<h1 style="color: red;">'.$trys.'</h1>';
    }else{
        echo '<h1 style="color: blue;">'.$trys.'</h1>';;
    }
}

echo '<br>';
echo '=====8=====';
echo '<br>';

$zvakiuKiekis = rand(5, 3000);
$suma = $zvakiuKiekis * 1;
$trysProcNuolaida = $suma / 100 * 3;
$keturiProcNuolaida = $suma / 100 * 4;
$sumaPoTrejuProcNuolaidos = $suma - $trysProcNuolaida;
$sumaPoKeturiuProcNuolaidos = $suma - $keturiProcNuolaida;
if($zvakiuKiekis <= 1000){
    echo "Parduota zvakiu: $zvakiuKiekis<br> Galutine kaina: $suma";
}else{
    if($zvakiuKiekis <= 2000){
        echo "Parduota zvakiu: $zvakiuKiekis<br> Kaina be nuolaidos: $suma <br> Nuolaida: $trysProcNuolaida<br> Galutine kaina po nuolaidos: $sumaPoTrejuProcNuolaidos";
    }else{
        if($zvakiuKiekis >2000){
            echo "Parduota zvakiu: $zvakiuKiekis <br> Kaina be nuolaidos: $suma <br> Nuolaida: $keturiProcNuolaida <br> Galutine kaina po nuolaidos: $sumaPoKeturiuProcNuolaidos ";
        }
    }
}

echo '<br>';
echo '=====9=====';
echo '<br>';

$uno = rand(0, 100);
$dos = rand(0, 100);
$tres = rand(0, 100);
echo "Uno: $uno, Dos: $dos, Tres: $tres <br>";
$failNum = 0;
$vidurkis = ($uno + $dos + $tres) / 3;
echo "$vidurkis <br>";
$newUno = '';
$newDos = '';
$newTres = '';
if($uno > 10 && $uno < 90){
    $newUno .= $uno;
    }else{
        $failNum .= $uno;
    }
if($dos > 10 && $dos < 90){
    $newDos .= $dos;
    }else{
        $failNum .= $dos;
    }
if($tres > 10 && $tres < 90){
    $newTres .= $tres;
}else{
    $failNum .= $tres;
}

echo "NewUno $newUno <br>";
echo "NewDos $newDos <br>";
echo "NewTres $newTres <br>";
$newString = $newUno + $newDos + $newTres;
echo '<br>';
echo strlen($newString);
$count = strlen($newString);
echo "$newString <br>";
$newAvg = $newString / $count;
echo "Sorted avg: $newAvg <br>";
