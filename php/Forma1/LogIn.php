<?php
$alert = '';

// esto nos salteamos porque estamos probando
// session_start();
// if(!empty($_SESSION['active'])){
//     // header('Location: http://www.google.com/');
//     // die();
//     // en vez de redireccionar cambiare el mensaje
//     $alert = 'sesion iniciada';
// }
// else{
    // sirve para inicios de sesion perolo probe con consultas lol
    
        if(!empty($_POST)){
            if(empty($_POST['usuario']) && empty($_POST['contraseña'])){
                $alert = 'ingrese sus datos'; 
            }
            else{
                require_once "conexion.php";
                $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
                $contraseña = md5(mysqli_real_escape_string($conexion, $_POST['contraseña']));

                $consulta_sql = "SELECT user, pass FROM users WHERE user = '$usuario' AND pass = '$contraseña'";
                    
                $query_mysql = mysqli_query($conexion, $consulta_sql);
                    
                $cantidadDeResultados = mysqli_num_rows($query_mysql);      

                if($cantidadDeResultados > 0){
                    // esto lo salteamos porque esta,os probando    
                    // $resultado = mysqli_fetch_array($query_mysql);
                    // $_SESSION['active'] = true;
                    // $_SESSION['usuario'] = $resultado[0];
                    // $_SESSION['contraseña'] = $resultado[1];

                    // header('Location: http://www.google.com/');
                    // die();
                    $alert = 'sesion iniciada';
                }
                else{
                    $alert = 'Usuario y/o Contraseña Invalidos';
                    // session_destroy();
                }
            }
        }
    
    
// }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="conteiner">

            <form action="LogIn.php" method="POST">

                <img src="img/usuario.png" alt="log">

                <p>Usuario</p>
                <input type = 'text' name = 'usuario'>

                <p>Contraseña</p>
                <input type="password" name = 'contraseña'>
                
                <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                
                <input id="submit" type = 'submit' name ='ingresar' value = 'Ingresar'>
            </form>
        </div>
    </body>
</html>
