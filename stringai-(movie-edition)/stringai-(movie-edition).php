<?php

echo '<br>';
echo '=====1=====';
echo '<br>';

$vardas = 'Tom';
$pavarde = 'Hanks';

if(mb_strlen($vardas) > mb_strlen($pavarde)){
    echo $vardas . '<br>';
}else{
    echo $pavarde . '<br>';
}

echo '<br>';
echo '=====2=====';
echo '<br>';

echo strtoupper($vardas) . ' ' . strtolower($pavarde);

echo '<br>';
echo '=====3=====';
echo '<br>';

$inicials = $vardas[0] . $pavarde[0];
echo $inicials;

echo '<br>';
echo '=====4=====';
echo '<br>';

$vardasEnd = substr($vardas, -3, 3);
$pavardeEnd = substr($pavarde, -3, 3);
$newEndName = $vardasEnd . $pavardeEnd;
echo $newEndName;

echo '<br>';
echo '=====5=====';
echo '<br>';

$Murika = 'An American in Paris';
$murikaStar = str_ireplace('a', '*', $Murika);
echo $murikaStar;

echo '<br>';
echo '=====6=====';
echo '<br>';

$murikaLetter = substr_count($Murika, 'a');
$murikaCapitalLetter = substr_count($Murika, 'A');
echo $murikaLetter . '<br>';
echo $murikaCapitalLetter . '<br>';
echo 'Total letter count:' . $murikaLetter + $murikaCapitalLetter;

echo '<br>';
echo '=====7=====';
echo '<br>';

$breakfast = 'Breakfast at Tiffany`s' ;
$space = '2001: A Space Odyssey';
$life = 'It`s a Wonderful Life';

$replaceBreakfast = preg_replace('#[aeiou\s]+#i', '', $breakfast);
$replaceSpace = preg_replace('#[aeiou\s]+#i', '', $space);
$replaceLife = preg_replace('#[aeiou\s]+#i', '', $life);
echo $replaceBreakfast . '<br>';
echo $replaceSpace . '<br>';
echo $replaceLife . '<br>';

echo '<br>';
echo '=====8=====';
echo '<br>';

$starWars = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' A New Hope';
echo $starWars . '<br>';
$number = filter_var($starWars, FILTER_SANITIZE_NUMBER_INT);
echo 'Epizodo skaicius:' . $number . '<br>';

echo '<br>';
echo '=====9=====';
echo '<br>';

$movieName = 'Don`t Be a Menace to South Central While Drinking Your Juice in the Hood';
$countWords = explode(' ', $movieName);
$lessOrEqualsFive = 0;
foreach($countWords as $val){
    echo($val . ' ');
}
echo '<br>';
foreach($countWords as $val){
    if(mb_strlen($val) <= 5){
        $lessOrEqualsFive++ ;
    }
}

echo 'Zodziu kiekis trumpesniu ar lygiu 5: ' . $lessOrEqualsFive . '<br>';

$movieNameLtu = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$countWordsLtu = explode(' ', $movieNameLtu);
$lessOrEqualsFiveLtu = 0;
foreach($countWordsLtu as $val){
    echo($val . ' ');
}
echo '<br>';
foreach($countWordsLtu as $val){
    if(mb_strlen($val) <= 5){
        $lessOrEqualsFiveLtu++ ;
    }
}

echo 'Zodziu kiekis trumpesniu ar lygiu 5(Ltu version): ' . $lessOrEqualsFiveLtu . '<br>';

echo '<br>';
echo '=====10=====';
echo '<br>';

$abecele = 'abcdefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($abecele), 0, 3);


echo '<br>';
echo '=====11=====';
echo '<br>';

$combo = [$countWords . $countWordsLtu];
$randWord = [rand(0, -1)];

foreach($randWord as $var){
    echo($var . ' ');
}
