<?php
    /* 
    Para crear una variable simple
    Se debe iniciar con el simbolo pesos '$'
    Luego se agrega el nombre de la variable
    Esta puede o no quedar inicializada
    Nos da suficiente livertad ya que no requiere darle formato

    */
    $variableSinInicializar;
    $variableInicializada = 0;
    $entero = 14;
    $texto = 'este es un texto';

    echo $entero;
    echo '<br>';

    echo $texto;
    echo '<br>';

    // Para concatenar se una el punto '.'
    // Se pueden concatenar diferentes variable, texto, numeros, etc
    echo $entero . " " . $texto . 14;
    echo '<br>';

    // Tambien se pueden agregar las bariables dentro de las comillas
    echo "$entero $texto 14";
    echo '<br>';



    /*
    Existen varios tipos de ariables 
    -String
    -Integer
    -Float
    -Array
    -Object
    -NULL
    */

?>