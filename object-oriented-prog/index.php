<?php

echo '<pre>';

require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Kibiras2.php';
require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';
require __DIR__ . '/Pinigine.php';
require __DIR__ . '/Stikline.php';
require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';

/* 1uzduotis */
?><h1 style="color: red;">1 Uzduotis </h1><?php
$kibiras = new Kibiras1;
print_r($kibiras);
echo $kibiras->prideti1Akmeni();
echo $kibiras->prideti1Akmeni();
echo $kibiras->prideti1Akmeni();
print_r($kibiras);

echo $kibiras->pridetiDaugAkmenu(6);
print_r($kibiras);

echo $kibiras->kiekPririnktaAkmenu();

/* 2uzduotis */
?><h1 style="color: red;">2 Uzduotis </h1><?php
$pinigine = new Pinigine;
print_r($pinigine);
$pinigine->idieti(1);
print_r($pinigine);
$pinigine->idieti(3);
print_r($pinigine);
$pinigine->idieti(23);
print_r($pinigine);
$pinigine->idieti(2);
print_r($pinigine);

?><h1 style="color: red;">3 Uzduotis </h1><?php

$kib1 = new Kibiras2;
$kib2 = new Kibiras2;
$kib3 = new Kibiras2;
$kib1->prideti1Akmeni();
$kib1->prideti1Akmeni();
$kib1->pridetiDaugAkmenu(5);
$kib1->kiekPririnktaAkmenu();
$kib2->prideti1Akmeni();
$kib2->prideti1Akmeni();
$kib2->pridetiDaugAkmenu(5);
$kib2->prideti1Akmeni();
$kib2->prideti1Akmeni();
$kib2->pridetiDaugAkmenu(3);
$kib2->kiekPririnktaAkmenu();
$kib3->prideti1Akmeni();
$kib3->pridetiDaugAkmenu(15);
$kib3->kiekPririnktaAkmenu();






print_r($kib1);
print_r($kib2);
print_r($kib3);

echo 'VISO: '. Kibiras2::akmenuKiekisVisuoseKibiruose();

?><h1 style="color: red;">4 Uzduotis </h1><?php

$superKibirasNePo1 = new KibirasNePo1;
print_r($superKibirasNePo1);
$superKibirasNePo1->prideti1Akmeni();
print_r($superKibirasNePo1);
$superKibirasNePo1->prideti1Akmeni();
print_r($superKibirasNePo1);
$superKibirasNePo1->prideti1Akmeni();
print_r($superKibirasNePo1);
$superKibirasNePo1->prideti1Akmeni();
print_r($superKibirasNePo1);
$superKibirasNePo1->kiekPririnktaAkmenu();
print_r($superKibirasNePo1);

?><h1 style="color: red;">5 Uzduotis </h1><?php

$_200stikline = new Stikline(200);
$_150stikline = new Stikline(150);
$_100stikline = new Stikline(100);

$_200stikline->ipilti(150);
$_200stikline->likutis();
print_r($_200stikline);

?><h1 style="color: red;">6 Uzduotis </h1><?php

$_grybas1 = new Grybas;
$_grybautojas1 = new Krepsys;
print_r($_grybas1);
$_grybautojas1->detiIKrepsi($_grybas1);

$_grybautojas1->atsakymas();
print_r($_grybautojas1);










?>