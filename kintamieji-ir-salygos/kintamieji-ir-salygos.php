<?php
echo '=====1=====';
echo '<br>';

$vardas = 'Aleksandr';
$pavarde = 'Vasiljev';
$gimymoMetai = 1986;
$einamiejiMetai = 2022;
$metai = $einamiejiMetai - $gimymoMetai;

echo "As esu $vardas $pavarde. Man yra $metai metai(u) ";
echo '<br>';
echo '=====2=====';
echo '<br>';

$one = rand(1, 5);
echo '<br>';
$two = rand(1, 5);
echo '<br>';
echo $one;
echo '<br>';
echo $two;
echo '<br>';
if($one > $two){
    echo round($one / $two, 2);
}else{
    echo round($two / $one, 2);
}
echo '<br>';
echo '=====3=====';
echo '<br>';
$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);
echo "a $a";
echo '<br>';
echo "b $b";
echo '<br>';
echo "c $c";
echo '<br>';

if($a < $b && $b < $c) {
    echo "answer : b $b";
}else{
    if($c < $b && $b < $a){
        echo "answer : b $b";

    }else{
        if($c < $a && $a < $b) {
            echo "answer : a $a";
            }else{
                if($b < $a && $a < $c) {
                    echo "answer : a $a";
                }else{
                    if($b < $c && $c < $a){
                        echo "answer : c $c";
                    }else{
                        if($a < $c && $c < $b){
                            echo "answer : c $c";
                        }
                    }

                }
            }
        }
    }


echo '<br>';
echo '=====4=====';
echo '<br>';

$x = rand(1, 10);
echo $x;
echo '<br>';
$y = rand(1, 10);
echo $y;
echo '<br>';
$z = rand(1, 10);
echo $z;
echo '<br>';

echo $x + $y > $z && $y + $z > $x && $x + $z > $y ? 'Galima' : 'Nigalima';
