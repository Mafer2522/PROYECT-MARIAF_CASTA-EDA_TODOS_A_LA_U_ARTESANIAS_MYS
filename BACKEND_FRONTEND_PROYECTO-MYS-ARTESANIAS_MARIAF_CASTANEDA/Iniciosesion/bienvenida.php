<?php

session_start();
//Si no hay una sesión
if(!isset($_SESSION['usuario'])){
    echo'
       <script>
         alert("Por favor,debes iniciar sesión");
         window.location="index.php";
       </script>

    ';
    session_destroy();
    die();
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estiloscerrarsesion.css">
 
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido a mi  mundo</h1>
    <a class="boton-personalizado" href="php/cerrar_sesion.php">Cerrar sesión</a>
   

    
</body>
</html>