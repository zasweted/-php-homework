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


$uniqMas = array_unique($_ABCD);
print_r($uniqMas);
echo "Uniq Count: ". count($uniqMas) . "\n";

$countedABCD = array_count_values($_ABCD);
$strictUniqMas = [];

foreach($countedABCD as $i => $a){
    if($a == 1){
        $strictUniqMas[] = $i;
    }
}
echo 'Strict Uniq ABCD';
print_r($strictUniqMas) . "\n";
echo 'Ne karta nesikartojanciu reiksmiu skaicius:' . count($strictUniqMas);




// print_r($filterMas);

echo '<br>';
echo '=====6=====';
echo '<br>';

$nuMas01 = [];
$nuMas02 = [];

while(count($nuMas01) < 100){
    $push = rand(100, 999);
        if($push != in_array($push, $nuMas01)){
            $nuMas01[] = $push;
        }
}

while(count($nuMas02) < 100){
    $push = rand(100, 999);
        if($push != in_array($push, $nuMas02)){
            $nuMas02[] = $push;
        }
}
echo 'Pirmas uniq';
print_r($nuMas01);
echo 'Antras uniq';
print_r($nuMas02);

echo '<br>';
echo '=====7=====';
echo '<br>';

$naujasMas01 =[];

foreach($nuMas01 as $a){
    if($a != in_array($a, $nuMas02)){
        $naujasMas01[] = $a;
    }
}
echo 'Reiksmes kuriu nera $nuMas02:';
print_r($naujasMas01);

echo '<br>';
echo '=====8=====';
echo '<br>';

$naujasMas02 =[];
foreach($nuMas01 as $a){
    if($a == in_array($a, $nuMas02)){
        $naujasMas02[] = $a;
    }
}
echo 'Reiksmes kurios yra $nuMas01 ir $nuMas02 masyvose:';
print_r($naujasMas02);

echo '<br>';
echo '=====9=====';
echo '<br>';

$comboMas = array_combine($nuMas02, $nuMas01);
echo 'Combo masyvas:';
print_r($comboMas);

echo '<br>';
echo '=====10=====';
echo '<br>';

$fi =[];
foreach(range(0, 1) as $a){
    $fi[] = rand(5, 25);
}

for($i = 2; $i < 10; $i++){
    $fi[$i] = $fi[$i - 1] + $fi[$i - 2];
}
echo 'Fibonacci:';
print_r($fi);
