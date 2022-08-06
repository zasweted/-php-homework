<?php 
echo '<pre>';

echo '<br>';
echo '=====1=====';
echo '<br>';

$multiMas = [];
foreach(range(0, 9) as $a){
    foreach(range(0, 4) as $b){
        $multiMas[$a][] = rand(5, 25);
    }
}
echo 'Multi masyvas:';
print_r($multiMas);

echo '<br>';
echo '=====2.(a)=====';
echo '<br>';
$count = 0;
foreach($multiMas as $a){
    foreach($a as $b){
        if($b > 10){
            $count++;
        }
    }
}

echo 'Kiek daugiau uz 10:' . $count . "\n";

echo '<br>';
echo '=====2.(b)=====';
echo '<br>';
$multiBig = [];
$big = [];
foreach($multiMas as $a){
    foreach($a as $b){
       $big[] = $b;
        $multiBig[] = max($big);
    }
}

echo 'Biggest:' . "\n";
print_r(max($multiBig));

echo '<br>';
echo '=====2.(c)=====';
echo '<br>';

$suma = [];

foreach($multiMas as $a){
    foreach($a as $i => $b){
        if($i % 2 == 0){
            $suma[] = $b;
        }
    }
}
echo 'SUma:' . array_sum($suma);

echo '<br>';
echo '=====2.(d)=====';
echo '<br>';

foreach(range(0, 9) as $a){
    foreach(range(5, 6) as $b){
        $multiMas[$a][] = rand(5, 25);
    }
}
echo 'Papilditas masyvas:';
print_r($multiMas);

echo '<br>';
echo '=====2.(e)=====';
echo '<br>';
$multiSum = [];
foreach($multiMas as $a){
    $multiSum[] = array_sum($a);
}

echo 'Multi Sum:';
print_r($multiSum);

echo '<br>';
echo '=====3=====';
echo '<br>';

$multiAToZMas = [];
foreach(range(0, 9) as $a){
    foreach(range(0, rand(1, 20)) as $b){
        $randLetter = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'][rand(0, 25)];
        $multiAToZMas[$a][] = $randLetter;
    }
}
echo 'Multi random A to Z array:';
print_r($multiAToZMas);

$multiSorted = [];
foreach($multiAToZMas as $i => $a){
    sort($a);
    $multiSorted[] = $a;
    
}

echo 'MULTI_SORTED';
print_r($multiSorted);

echo '<br>';
echo '=====4=====';
echo '<br>';



