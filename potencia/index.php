<?php
  $base = 5;
  $expoente = 3;
  $i = 2;
  $potencia;
  
      $potencia = $base;
      while ($i <= $expoente){
          $potencia = $potencia * $base;
          $i++;
      }
      echo($potencia);


?>