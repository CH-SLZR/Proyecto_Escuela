<?php
    include("../sql/conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$ape_pat=$_POST['apellido_paterno'];
$ape_mat=$_POST['apellido_materno'];
$email=$_POST['email'];
$tel=$_POST['telefono'];

$sql="UPDATE alumno SET id='$id', nombre='$nombre', apellido_paterno='$ape_pat', apellido_mateno='$ape_mat', email='$email', telefono='$tel' WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: create.php");
    }
?>