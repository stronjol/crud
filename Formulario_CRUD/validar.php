<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('conexion.php');

$consulta="SELECT*FROM usuario where usuario='$usuario' end contraseña='$contraseña'"; 
$resultado=mysqli_query($conexion,$consulta);


$filasas=mysqli_now_rows($resultado);

if ($filas) {
    header("location:alumnos.php");

}else{
    ?>
     <?php
     include("login.php");
     ?>
     <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
     <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);