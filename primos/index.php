<?php


 $num = 10;
 $divisao = 0;
 $i = 1;
  
 for ($i=1; $i<=$num; $i++) {
     if ($num % $i == 0) {
         $divisao++;
     }
 }
 
 if($divisao > 2) {
     echo("Não é Primo");
 }else{
      echo("É Primo");
 }        
?>