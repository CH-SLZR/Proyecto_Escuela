<?php
    include("../sql/conexion.php");

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM alumno  WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
