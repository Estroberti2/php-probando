<?php

    /*
    Usa los operadores logicos de siempre
    And (&&)(and) 
    Or (||)(or)
    XOr (xor)
    Not (!)
    Igualdad (==)
    Desigualdad (!=)
    */

    $verdadero = true;
    $falso = false;

    $verdad = ($verdadero && $verdadero) == true;
    $vardad = ($verdadero  || $falso) == true;
    $falso1 = ($falso and $falso) == true;
    $falso1 = ($falso  or  $falso) == true;

    // Lo que hace == es comprobar la igualdad de ambos lados y de ello retorna tre o false

    $verdad = $verdadero == true && $falso == false; // true
?>