<?php

    $placa=4346; 
    $num;

    $num = $placa%10;

    echo('Final da placa:'.$num. '<br>');
    switch ($num) {
        case 1; case 2;
            echo('Segunda-Feira');
            break;
        case 3; case 4;
            echo(' Terça-Feira');
            break;
        case 5; case 6;
            echo('Quarta-Feira');
            break;
        case 7; case 8;
            echo('Quinta-Feira');
            break;
        case 9; case 0;
            echo('Sexta-Feira');
            break;
    }


?>