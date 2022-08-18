<?php
require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';
/* 1uzduotis */
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