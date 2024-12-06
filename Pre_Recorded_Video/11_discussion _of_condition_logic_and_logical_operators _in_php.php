<?php

$n = 13;
if($n % 2 == 0){
    echo " $n is an even number";
}else{
    echo "$n is a odd number";
}
echo "\n";

if ($n > 10){
    echo "$n is greater than 10";
}

echo "\n";

$m = 12;
$n = 12;
if($m == $n){
    echo "M is equal to N";
}

echo "\n";

$m = 12;
$n = 13;
if($m != $n){
    echo "M is not equal to N";
}
//Logical operator ==, !=, <, >, <=, >=

echo "\n";

$alam = 500;
$rahim = 500;

if($alam == $rahim){
    echo "Alam and Rahim has same amount of money";

}elseif($alam>$rahim){
    echo"Alam has more money than Rahim";

}elseif($alam<$rahim){
    echo"Alam has less money than Rahim";
}
