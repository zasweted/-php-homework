<?php
echo '<pre>';
echo '<hr>';
echo '<br>';
echo '=====1=====';
echo '<br>';
echo '<hr>';

function greetings($a) {
    return $a;
}

$x = greetings('Laba diena');

print_r("<h1>$x</h1>");
echo '<hr>';
echo '<br>';
echo '=====2=====';
echo '<br>';
echo '<hr>';
$y = rand(1, 6);
function superGreetings($a, $b) {
    return "<h$b>$a</h$b>";
}

echo superGreetings($x, $y);
echo '<hr>';
echo '<br>';
echo '=====3=====';
echo '<br>';
echo '<hr>';
$rngStr = md5(time());

$answer = preg_replace_callback('/\d+/', function($str){
    return '<h1>'.$str[0].'</h1>';
}, $rngStr);

echo $answer;
echo '<hr>';
echo '<br>';
echo '=====4=====';
echo '<br>';
echo '<hr>';
function dalyba(int $num){
    
 $counter = 0;
 for($i = ($num -1); $i > 1; $i--){
     if($num % $i == 0){
         $counter++;
        }
    }
 return $counter;
};
echo "\n";
echo 'Skaicius kuri paduodam:' . $randD = rand(1, 100) . "\n";
echo 'Kiek kartu:' . dalyba($randD);
echo '<hr>';
echo '<br>';
echo '=====5=====';
echo '<br>';
echo '<hr>';
$mas = [];
$newMas = [];
foreach(range(1, 100) as $_){
    $mas[] = rand(33, 77);
}
foreach($mas as $i => $val){
    $newMas[$i] = dalyba($val);
}
arsort($newMas);
print_r($mas);
print_r($newMas);
echo '<hr>';
echo '<br>';
echo '=====6=====';
echo '<br>';
echo '<hr>';
$_300Mas = [];
$_300Prime = [];
foreach(range(1, 100) as $_){
    $_300Mas[] = rand(333, 777);
}
foreach($_300Mas as $a){
    if(dalyba($a) !== 0){
        $_300Prime[] = $a;
    }
}
print_r($_300Mas);
print_r($_300Prime);
echo '<hr>';
echo '<br>';
echo '=====7=====';
echo '<br>';
echo '<hr>';


function randomArrayGenerator(int $arrayLength, int $amountOfCycles) {
    static $counter = 0;
    $ciklai = $amountOfCycles;
    $masyf = [];
    while($counter < $ciklai){
        $counter++;
        foreach(range(1, $arrayLength -1) as $a){
            $masyf[] = rand(0,10);
        }
        if($counter < $ciklai){
            $masyf[] = randomArrayGenerator($arrayLength, $amountOfCycles);
        }else{
            $masyf[] = 0;
        }


    }
    return $masyf;
}
$multiDimensionalArray = randomArrayGenerator(rand(10, 20), rand(10, 30));
print_r($multiDimensionalArray);
echo '<hr>';
echo '<br>';
echo '=====8=====';
echo '<br>';
echo '<hr>';

function sumRecursiveAraays(array|int $arrayToSum){
        $sum = 0;
        if(is_int($arrayToSum)){
            $sum += $arrayToSum;
        } else {
            foreach($arrayToSum as $a){
                $sum += sumRecursiveAraays($a);
            }
        }
        return $sum;
};
echo "Visu elementu suma:";
echo sumRecursiveAraays($multiDimensionalArray);
echo '<hr>';
echo '<br>';
echo '=====9=====';
echo '<br>';
echo '<hr>';

function primeNumberArray($arrayLength){
    $masyf = [];
    $counter = 0;
    foreach(range(1, $arrayLength) as $_){
        $masyf[] = rand(1, 33);
    }
    foreach($masyf as $val){
        for($i = ($val -1); $i > 1; $i--){
            if($val % $i != 0){
                $counter++;
               }
           }
    }


    return $val;
};
print_r(primeNumberArray(3));