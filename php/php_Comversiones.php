<?php

    /*
    Existen metodos para cambiar de un formato a otro 
    Entre algunos estanprotected function assertPostConditions(): void
    intval()
    boolval()
    floatval()
    strval()
    */ 

    // intval()
    // este es usado para combertir un dato a numero entero

    $entero = intval(true);
    echo $entero . '<br>';

    $entero = intval('4');
    echo $entero . '<br>';

    // al pasar un flotante a decimal con esta forma este no tomara en 
    // cuenta los numeros despues de la coma ni su redondeo 
    // quedando solo la parte decimal
    $entero = intval(5.9);
    echo $entero . '<br>';

    // Con esta forma tambien se puede pasar de otras bases a entero
    $int = 0b1010;
    $binario = intval($int, 10); 
    echo $binario . '<br>';

    // boolval()
    // Para este caso todo numero o condicion igual a 0 es False
    // Caso contrario es True
    $booleano = boolval("");
    echo $booleano . '<br>';

    $booleano = boolval(0);
    echo $booleano . '<br>';

    $booleano = boolval(-0);
    echo $booleano . '<br>';

    $booleano = boolval(0.0);
    echo $booleano . '<br>';

    $booleano = boolval(-0.0);
    echo $booleano . '<br>';

    $booleano = boolval(array());
    echo $booleano . '<br>';

    // floatval()
    // este es usado para combertir un dato a numero flotante



    /* 
    Luego hay otra forma de castear los valores que es 
    agregando el tipo de dato entre parentesis antes de dato
    $va = (tipo dato) Dato;
    */
    $int = (int) 9.99;
    echo $int . '<br>';
    $string = (string) 9990;
    echo $string . '<br>';
    $bool = (bool) 0;
    echo $bool . '<br>';

    /*
    Luego esta la siguiente que funciona de la misma manera
    var_dump((tipo dato) DAto);
    */

    
?>