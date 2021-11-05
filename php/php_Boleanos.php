<?php
    /*
    Los buleanos se pueden usar dde la siguiente manera
    Agregandolos a una variable
    Usarlos en para revisar la igualdad en un condicional, loop, etc.
    */

    // Agregandolos a una Variable

    $bool1 = true;

    $bool2 = false;

    // tambien se pueden usar de esta manera

    $bool3 = (true and false); // false

    // Hay que tener cuidado porque al ponerlo sin parentesis 
    // toma siempre el boleano que va primero

    $bool3 = false and true; // will be false

    $bool3 = true and false; // will be true

    


?>