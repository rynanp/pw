<?php

$sal = 4000;
$depto = 2;
$porc = 15/100;
$porc2;

if ($depto == 1) {
    $porc2 = ($porc * $sal) + $sal;
    echo ("O salário será de: ");
    echo $porc2;
}
if ($depto ==2 && $sal <= 1500 && $sal <1750) {
    $porc = 12/100;
    $porc2 = ($porc * $sal) + $sal;
    echo ("O salário será de: ");
    echo $porc2;
}
if ($depto ==2 && $sal <= 1750 && $sal <2000) {
    $porc = 10/100;
    $porc2 = ($porc * $sal) + $sal;
    echo ("O salário será de: ");
    echo $porc2;
}
if ($depto ==2 && $sal <= 2000 && $sal <3000) {
    $porc = 7/100;
    $porc2 = ($porc * $sal) + $sal;
    echo ("O salário será de: ");
    echo $porc2;
}else{
    $porc = 5/100;
    $porc2 = ($porc * $sal) + $sal;
    echo ("O salário será de: ");
    echo $porc2;
}
?>