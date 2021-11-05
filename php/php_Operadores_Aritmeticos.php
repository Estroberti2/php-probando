<?php

    /*
    Estos siguen siendo los mismos de siempre
    Suma (+)
    Resta (-)
    Multiplicacion (*)
    Division (/)
    Exponente (**)
    Resto (%)
    */

    // Suma
    // Lo que tiene es que como las variables 
    // pueden tenerer cualquier tipode dato
    // al realizar la suma, este se castea solo a int o float
    $a = 7;
    $b = '15';
    $c = $a + $b; // 22
    echo $c . '<br>';

    // Resta
    // hace lo mismo en cuanto a la suma con las variables pero este resta
    $a = 7;
    $b = '15';
    $c = $a - $b; // -8
    echo $c . '<br>';

    // Multiplicacion
    $a = 7;
    $b = '15.75';
    $c = $a * $b; // 110.25
    echo $c . '<br>';

    // Division
    // Aqui devuelve un valor flotante a menos que los dos operandos sean integers
    $a = 7;
    $b = '15.75';
    $c = $a / $b; // 0.44444444444444
    echo $c . '<br>';

    // Resto o Modulo
    // es lo que sobra de la division
    $a = 5;
    $b = '3';
    $c = $a % $b; // 2
    echo $c . '<br>';

    // Exponente
    $a = 3;
    $b = '4';
    $c = $a ** $b; // 81
    echo $c . '<br>';
?>