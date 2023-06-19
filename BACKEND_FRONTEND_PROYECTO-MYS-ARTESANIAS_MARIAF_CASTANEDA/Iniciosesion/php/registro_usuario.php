<?php

    include 'conexion.php'; 

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //Encriptar contraseña 
    //$contrasena=hash('sha512',$contrasena);


    $query ="INSERT INTO usuarios (nombre_completo,correo,usuario,contrasena)
            VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

//Verificar que el correo no se repita en base de datos

$verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
 
//Condicional verificar si existe una fila con un correo existente
if(mysqli_num_rows($verificar_correo)>0){
    echo '
        <script>

        alert("Este Correo ya se encuentra registrado,intenta con otro diferente");
        window.location="../index.php";

         </script>
        
';
exit();  

}

//Verificar que el nombre de usuario no se repita en base de datos

$verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");
 
//Condicional verificar si existe una fila con un usuario existente
if(mysqli_num_rows($verificar_usuario)>0){
    echo '
    <script>

        alert("Este Usuario ya se encuentra registrado,intenta con otro diferente");
        window.location="../index.php";

     </script>
    
';
exit();  
}

$ejecutar =mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>

        alert("Usuario registrado  exitosamente");
        window.location="../index.php";

     </script>
    
    ';
}else{
    echo'

   <script>

       alert("Intentelo de nuevo,usuario no registrado");
       window.location="../index.php";

  </script>

  ';

}

mysqli_close($conexion)

?>
