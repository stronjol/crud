<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$calificacion=$_POST['calificacion'];

$sql="UPDATE alumno SET  dni='$dni',nombres='$nombres',apellidos='$apellidos',calificacion='$calificacion' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>