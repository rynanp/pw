<?php
    $i = 1;
    $IAtual;
    $ISoma = 0;
    $PAtual;
    $PMulti = 0;
    while ($i <= 20){
        if( $i % 2 == 0){
            $PAtual = $i;
            $PMulti = $PMulti * $PAtual;
           
        }else{
            $IAtual = $i;
            $ISoma = $ISoma + $IAtual;
             
        }
        $i++;
    }
    echo("A soma dos numeros impares é ". $ISoma . 
    "<br> A multiplicação dos numeros pares é ". $PMulti);
?>