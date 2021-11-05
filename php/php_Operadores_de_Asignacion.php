<?php

    /*
    El operador básico de asignación es "=". 
    Se podría inclinar a pensar primero que es como un "igual a". 
    Realmente significa que el operando de la izquierda se establece con el 
    valor de la expresión de la derecha 
    */

    // Suede usarse de varias formas
    // De forma sensilla
    $a = 1;

    // De forma mas compuesta
    
    // aqui creamos lavariable $a 
    // tambien establecemos a $b como 4
    // y asignamos b+5(4+5) en $a

    $a = ($b = 4) + 5; // $a = 9;

    /* 
    Asignacion por referencia
    este metodo te permite asignar una variable a otra 
    pero a modo de referencia
    esto hace que si el valor de la variable asignada cambia
    la variable referenciada cambie con ello
    */
    $a = 3;
    $b = &$a; // $b es una referencia para $a

    echo "$a<br>"; // muestra 3
    echo "$b<br>"; // muestra 3

    $a = 4; // cambia $a

    echo "$a<br>"; // muestra 4
    echo "$b<br>"; // muestra 4 

    /*
    Sino al haceerlo de la manera normal 
    sucederia lo siguiente
    */
    $c = 5;
    $d = $c;

    echo "$d<br>";

    $c = 10;

    echo "$d<br>";
?>