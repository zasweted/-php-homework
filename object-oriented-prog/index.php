<?php
require __DIR__ . '/Kibiras1.php';

$kibiras = new Kibiras1;
print_r($kibiras);
echo $kibiras->prideti1Akmeni();
echo $kibiras->prideti1Akmeni();
echo $kibiras->prideti1Akmeni();
echo $kibiras->prideti1Akmeni();
echo $kibiras->prideti1Akmeni();
print_r($kibiras);

echo $kibiras->pridetiDaugAkmenu(6);
print_r($kibiras);

echo $kibiras->kiekPririnktaAkmenu();