<?php
echo '<pre>';
echo '<br>';
echo '=====1=====';
echo '<br>';

function greetings($a) {
    return $a;
}

$x = greetings('Laba diena');

print_r("<h1>$x</h1>");
echo '<br>';
echo '=====2=====';
echo '<br>';
$y = rand(1, 6);
function superGreetings($a, $b) {
    return "<h$b>$a</h$b>";
}

echo superGreetings($x, $y);

echo '<br>';
echo '=====3=====';
echo '<br>';

$rngStr = md5(time());

$answer = preg_replace_callback('/\d+/', function($str){
    return '<h1>'.$str[0].'</h1>';
}, $rngStr);

echo $answer;

echo '<br>';
echo '=====4=====';
echo '<br>';

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
echo 'Skaicius kuri paduodam:' . $randD = 60 . "\n";
echo 'Kiek kartu:' . dalyba($randD);

echo '<br>';
echo '=====5=====';
echo '<br>';

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

echo '<br>';
echo '=====6=====';
echo '<br>';

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

echo '<br>';
echo '=====7=====';
echo '<br>';

$generatedArray = randomArrayGenerator(rand(10, 20));
function randomArrayGenerator(int $arrayLength) {
    $masyf =[];
    $lastIndex = end($masyf);
    foreach(range(1, $arrayLength) as $_){
        $masyf[] = rand(0, 10);
        foreach($masyf as $i => $a){
            if($i !== $lastIndex){
                $masyf[] = rand(0, 10);
            }else{
                $masyf[$a][] = rand(10, 30);
            }
    
        }
    }
return $masyf;
}

print_r($generatedArray);
