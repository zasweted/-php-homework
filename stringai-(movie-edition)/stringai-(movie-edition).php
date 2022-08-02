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
$balses = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U') . '<br>';
echo $balses;
$replaceBreakfast = str_replace($balses, '', $breakfast);
echo $replaceBreakfast . '<br>';