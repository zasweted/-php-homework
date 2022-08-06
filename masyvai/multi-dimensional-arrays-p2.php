<?php
echo '<pre>';

echo '<br>';
echo '=====5=====';
echo '<br>';

$keys = ['user_id', 'place_in_row'];
$userIdMas = [];
foreach(range(0, 29) as $a){
    foreach($keys as $key) {
        if($key == 'user_id'){
            $userIdMas[$a][$key] = rand(1, 1000000);
        }else{
            $userIdMas[$a][$key] = rand(0, 100);
        }
    }
}

print_r($userIdMas);  

echo '<br>';
echo '=====6=====';
echo '<br>';
echo "Sorted by user_id from min to max \n";
sort($userIdMas);
print_r($userIdMas);

echo "Sorted by place_in_row from max to min \n";


$sortByPlace = [];

foreach($userIdMas as $a){
    foreach($a as $i=>$b){
        if(!isset($sortByPlace[$i])){
            $sortByPlace[$i] = [];
        }
        $sortByPlace[$i][] = $b;
    }
}

$orderby = 'place_in_row'; //pakeist i norima Key masyve;

array_multisort($sortByPlace[$orderby],SORT_DESC,$userIdMas);

print_r($userIdMas);

echo '<br>';
echo '=====7=====';
echo '<br>';




echo 'Random stringas:' . "\n";
$_keys = ['name', 'surname'];
foreach(range(0, 29) as $a){
    foreach($_keys as $key) {
        $randString = '';
        for($i = 0; $i < rand(5, 15); $i++){
        $randString .= $randLetter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'][rand(0, 25)];
}
        if($key == 'name'){
            $userIdMas[$a][$key] = ucfirst($randString);
        }else{
            $userIdMas[$a][$key] = ucfirst($randString);
        }
    }
    
}
echo "Papilditas Masyvas:";
print_r($userIdMas);

echo '<br>';
echo '=====8=====';
echo '<br>';

$_masyvs = [];


foreach(range(0, 9) as $a){
    $rand = rand(0, 4);
    foreach(range(0, $rand) as $b){
        if($rand !== 0){
            $_masyvs[$a][] = rand(5, 10);
        }else{
            $_masyvs[] = rand(0, 10);
        }
    }
}

print_r($_masyvs);

echo '<br>';
echo '=====9=====';
echo '<br>';

sort($_masyvs);
echo "Sortintas Masyvas 8 uzduoties: \n";
print_r($_masyvs);

$_sumMas = [];
foreach($_masyvs as $a){
    if(is_array($a) == true){
        $_sumMas[] = array_sum($a);
    }else{
        $_sumMas[] = $a;
    }
    
}
echo "Sumuotas Masyvas 8 uzduoties: \n";
print_r($_sumMas);

$_sumAll = array_sum($_sumMas);
echo "Bendra suma: \n";
echo $_sumAll;

echo '<br>';
echo '=====10=====';
echo '<br>';

$_keyz = ['value', 'color'];
$colorMas = [];
foreach(range(0, 9) as $a){
    foreach($_keyz as $key){
        $color = substr(md5(rand()), 0, 6);
        if($key == 'value'){
            $colorMas[$a][$key] = ['#', '%', '+', '*', '@', '裡'][rand(0, 5)];
        }else{
            $colorMas[$a][$key] = '#' . $color;
        }
    }
}
print_r($colorMas);

?>

<?php for($i = 0; $i < 25; $i++){
    foreach($colorMas as $a){
    } ?>
<div style="color: <?php echo $a['color']; ?>; line-height: 0px; margin: 0; font-size: 15px;"><?php echo str_repeat($a['value'] , 50); ?></div>
<?php } ?>

