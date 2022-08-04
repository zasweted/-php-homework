<?php
echo '<pre>';
echo '<br>';
echo '=====1=====';
echo '<br>';

$mas = [];
foreach(range(0, 29) as $var){
    $mas[$var] = rand(5, 25);
}

print_r($mas);

echo '<br>';
echo '=====2.(a)=====';
echo '<br>';
$daugUzDesimt = 0;
foreach($mas as $a){
    if($a > 10){
        $daugUzDesimt++;
    }
}
echo 'kiek daugiau uz 10: ' . $daugUzDesimt . "\n" ;

echo '<br>';
echo '=====2.(b)=====';
echo '<br>';
$max = array_keys($mas, max($mas));
foreach($max as $val){
    echo 'Indeksai: ' . $val . "\n";
}
echo '<br>';
echo '=====2.(c)=====';
echo '<br>';
$evenIndex = [];
foreach($mas as $i => $a){
    if($i % 2 == 0){
        $evenIndex[] = $i;
    } 
}
// print_r($evenIndex) . "\n";
echo 'Even array sum:' . array_sum($evenIndex) ."\n";


echo '<br>';
echo '=====2.(d)=====';
echo '<br>';
$newMas = [];
$count =0;
foreach($mas as $i => $a){
    $newMas[] = $a-$i;
}

print_r($newMas) . "\n";

echo '<br>';
echo '=====2.(e)=====';
echo '<br>';

foreach(range(30, 39) as $val){
    $mas[] = rand(5, 25);
}

print_r($mas);

echo '<br>';
echo '=====2.(f)=====';
echo '<br>';

$evenMas = [];
$oddMas = [];
foreach($mas as $i => $a){
    if($i % 2 == 0){
        $evenMas[] = $a;
    } else {
        $oddMas[] = $a;
    }
}
'porinis masyvas:' . print_r($evenMas) . "\n";
'neporinis masyvas:' . print_r($oddMas) . "\n";
echo '<br>';
echo '=====2.(g)=====';
echo '<br>';

foreach($mas as $i => $a){
    if($i % 2 === 0 && $a > 15){
        $mas[$i] = 0;
    }
}
echo 'Zero mas:';
print_r($mas);

echo '<br>';
echo '=====2.(h)=====';
echo '<br>';

foreach($mas as $i => $a){
    if($a > 10){
        echo 'daugiau uz 10:'. $i;
        break;
    }
}

echo '<br>';
echo '=====2.(i)=====';
echo '<br>';

foreach($mas as $i => $a){
    if($i % 2 === 0){
        unset($mas[$i]);
    }
}
echo 'Unsetintas array:';
print_r($mas);