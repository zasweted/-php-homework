<?php
echo '<pre>';
echo '<br>';
echo '=====1=====';
echo '<br>';

function greetings($a) {
    return $a;
}

$x = greetings('Laba diena');

print_r("<h1>$x</h1>");
echo '<br>';
echo '=====2=====';
echo '<br>';
$y = rand(1, 6);
function superGreetings($a, $b) {
    return "<h$b>$a</h$b>";
}

echo superGreetings($x, $y);

echo '<br>';
echo '=====3=====';
echo '<br>';

$rngStr = md5(time());

$answer = preg_replace_callback('/\d+/', function($str){
    return '<h1>'.$str[0].'</h1>';
}, $rngStr);

echo $answer;

echo '<br>';
echo '=====4=====';
echo '<br>';


