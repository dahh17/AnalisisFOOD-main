<?php
 function conectar(){
    $user = "root";
    $pass = "";
    $host = "localhost";
    $bd = "basedatos";
    $conexion = mysqli_connect($host, $user, $pass);

    mysqli_select_db($conexion,$bd);
    return $conexion;
 }
?>