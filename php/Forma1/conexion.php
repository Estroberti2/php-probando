<?php
$server = 'localhost'; // puede ser tambien la ip
$user   = 'root'; //el usuario default de mysql es 'root'
$pass   = null;  // si no tiene pass se le pasa 'null'
$db     = 'test'; // nombre de la base de datos a acceder

$conexion =mysqli_connect($server, $user, $pass, $db);
if(!$conexion){
    echo '<br>error en la coneccion';
}
?>