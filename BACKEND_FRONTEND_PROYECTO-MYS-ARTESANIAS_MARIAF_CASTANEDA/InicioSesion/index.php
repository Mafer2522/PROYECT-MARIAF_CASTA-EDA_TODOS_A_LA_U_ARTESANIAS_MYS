<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/estilosIniciosesion.css">
</head>
<body>
<title>Inicio de sesion</title>
</head>
<body>
    <form action="IniciarSesion.php" method="POST">
        <h1>INICIAR SESION</h1>
        <hr>
        <?php 
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>
                
            </p>
        <?php    
            }
        ?>

        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="Clave" placeholder="Clave">
        <hr>
        <button type="submit">Iniciar Sesion</button>
        <a href="CrearCuenta.php">Crear Cuenta</a>
    </form>
</body>
</html>    
</body>
</html>