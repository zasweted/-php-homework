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
$oddIndex = [];
foreach($mas as $i => $a){
    if($i % 2 == 0){
        $evenIndex[] = $i;
    } else {
        $oddIndex[] = $i;
    }
}
// print_r($evenIndex) . "\n";
// print_r($oddIndex) . "\n";
echo 'Even array sum:' . array_sum($evenIndex) ."\n";
echo 'Odd array sum:' . array_sum($oddIndex) ."\n";