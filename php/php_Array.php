<?php

    /*
    Estos son un tipo de lista
    Para crearlo se hace de la misma forma de con las demas cariable
    Se puede crearlo vacio o añadiendo algunos elementos en el mismo
     */
    
    // array vacio
    $array = array();

    // array inicializado
    $array2 = array(1, 3.3, False, 'hola', $array);

    // Como veran este puede tener varios tipos dentro incluso otros arrays

    // con var_dump() podremos ver cuantos elemento contiene el array 
    // como tambien sus elementos

    var_dump($array2);

    // Se pueden elejir un elemento en especifico, para ello al llamar al array
    // pondremois entre corchetes la posicion a mostrar

    echo '<br>' . $array2[3];


    // Por lo visto el array tambien sirve para hacer objetos
    // Estos objetos tienen par clave : valor

    $array3 = array(
        'clave' => 'valor'
    );
    
    echo '<br>';
    var_dump($array3);
    echo '<br>';
    echo $array3['clave'];
?>