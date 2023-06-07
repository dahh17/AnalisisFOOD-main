<?php
   
    $correo =$_POST['correo'];
    $nombre =$_POST['nombre'];
    $contraseña =$_POST['contraseña'];
    session_start();
    $_SESSION['correo'] = $correo;

    $conexion = mysqli_connect("localhost","root","","basedatos");

    $consulta = "SELECT * FROM usuarios WHERE correo='$correo'and  nombre='$nombre' and contraseña='$contraseña'";
    $resultado = mysqli_query($conexion,$consulta);
    
    $filas=mysqli_num_rows($resultado);
    if($filas){
        header("location: index.php");

    }else{
        include("login.php");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
