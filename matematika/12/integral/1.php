<?php
/*
1. ∫ (4x+2) (5 - 1/2 x) dx = ...

JAWABAN

1) ∫ (4x+2) (5 - ½x) dx
= ∫ (-2x² + 19x + 10) dx
= -(2/3)x³ + (19/2)x² + 10x + c

*/

function rand_number(){
    $decimalornot = rand(1, 5);
    if ($decimalornot == 1){
        $rand = rand(1, 99)/10;
        return $rand;
    } else {
        $rand = rand(1, 9);
        return $rand;
    }
}
$plus_or_minus_1 = rand(0,1);
$plus_or_minus_2 = rand(0,1);
$plus_or_minus_3 = rand(0,1);
$plus_or_minus_4 = rand(0,1);
$a = rand_number();
$b = rand_number();
$c = rand_number();
$d = rand_number();
if ($plus_or_minus_1 == 0){
    $operation1 = "";
} else {
    $operation1 = "-";
    }
if ($plus_or_minus_2 == 0){
    $operation2 = "+";
} else {
    $operation2 = "-";
    }
if ($plus_or_minus_3 == 0){
    $operation3 = "";
} else {
    $operation3 = "-";
    }
if ($plus_or_minus_4 == 0){
    $operation4 = "+";
} else {
    $operation4 = "-";
    }
echo "∫ ($operation1 ".$a."x $operation2 $b) ($operation3 ".$c."x $operation4 $d) dx <br><br>";
//start how to solve it..
if ($plus_or_minus_1 == 0){
} else {
    $a = - $a;
    }
if ($plus_or_minus_2 == 0){
} else {
    $b = - $b;
    }
if ($plus_or_minus_3 == 0){
} else {
    $c = - $c;
    }
if ($plus_or_minus_4 == 0){
} else {
    $d = - $d;
    }
$column1 = $a * $c;
$column2 = ($a * $d) + ($b * $d);
$column3 = $b * $d;
if ($column2 > 0){
    $op1 = " + ";
} else {
    $op1 = "";
}
if ($column3 > 0){
    $op2 = " + ";
} else {
    $op2 = "";
}

echo "<b>Jawaban:</b> <br>";
echo "∫ (".$column1."x²$op1".$column2."x$op2$column3) dx <br>";
//output answer:
//if ($number % 6 != 0) {
//$number += 6 - ($number % 6);
//}
if (is_float($column1)){
    $column1 = $column1/3;
} else {
    if (is_float($column1/3)){
    // 
    } else {
       $column1 = $column1/3; 
    }
}
if (is_float($column2)){
    $column2 = $column2/2;
} else {
    if (is_float($column2/2)){
    // 
    } else {
       $column2 = $column2/2; 
    }
}
echo $column1."x³".$op1.$column2."x²".$op2.$column3."x + C";
?>
