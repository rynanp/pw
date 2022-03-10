<?php

$num1 = 600;
$num2 = 500;
$num3 = 100;

if ($num1 < $num2 && $num1 < $num3) {
    echo ("Menor número: ");
    echo $num1;
}else if ($num2 < $num1 && $num2 < $num3) {
    echo ("Menor número: ");
    echo $num2;
}else if ($num3 < $num1 && $num3 < $num2){
    echo ("Menor número: ");
    echo $num3;
}
echo ("<br>⠀⠀⠀⠀⠀⠀⠀⠀⠀<br>");

if ($num1 > $num2 && $num1 > $num3) {
    echo ("Maior número: ");
    echo $num1;
}else if ($num2 > $num1 && $num2 > $num3) {
    echo ("Maior número: ");
    echo $num2;
}else if($num3 > $num1 && $num3 > $num2){
    echo ("Maior número: ");
    echo $num3;
}
?>