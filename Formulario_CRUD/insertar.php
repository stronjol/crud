<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$calificacion=$_POST['calificacion'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos','$calificacion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>