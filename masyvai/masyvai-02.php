<?php
echo '<pre>';

echo '<br>';
echo '=====3=====';
echo '<br>';

$mas = [];
foreach(range(0, 199) as $a){
    $mas[$a] = ['A', 'B', 'C', 'D'][rand(0, 3)];
}
echo 'Raidziu masyvas:';
print_r($mas);
$A =0;
$B =0;
$C =0;
$D =0;
foreach($mas as $a){
    if($a == 'A'){
        $A++;
    }else {
        if($a == 'B'){
            $B++;
        }else {
            if($a == 'C'){
                $C++;
            }else{
                $D++;
            }
        }
    }
}
echo "A raidziu : " .$A. "\n";
echo "B raidziu : " .$B. "\n";
echo "C raidziu : " .$C. "\n";
echo "D raidziu : " .$D. "\n";

echo '<br>';
echo '=====4=====';
echo '<br>';
asort($mas);
print_r($mas);
// foreach($mas as $i => $a){
//     echo $i = $a;
// }
echo '<br>';
echo '=====5=====';
echo '<br>';

$_1mas =[];
$_2mas =[];
$_3mas =[];
$_ABCD =[];

foreach(range(0, 199) as $a){
    $_1mas[$a] = ['A', 'B', 'C', 'D'][rand(0,3)];
}
foreach(range(0, 199) as $a){
    $_2mas[$a] = ['A', 'B', 'C', 'D'][rand(0,3)];
}
foreach(range(0, 199) as $a){
    $_3mas[$a] = ['A', 'B', 'C', 'D'][rand(0,3)];
}
foreach(range(0, 199) as $i => $a){
    $_ABCD[$a] = $_1mas[$i] . $_2mas[$i] . $_3mas[$i];
}

print_r($_ABCD);
echo '<br>';
echo '=====6=====';
echo '<br>';

$uniqMas = array_unique($_ABCD);
print_r($uniqMas);
echo "Uniq Count". count($uniqMas) . "\n";




print_r($filterMas);