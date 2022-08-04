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
echo '=====2=====';
echo '<br>';
$daugUzDesimt = 0;
foreach($mas as $a){
    if($a > 10){
        $daugUzDesimt++;
    }
}
echo 'kiek daugiau uz 10: ' . $daugUzDesimt . "\n" ;

echo '<br>';
echo '=====3=====';
echo '<br>';