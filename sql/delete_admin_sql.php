<?php
    include("../sql/conexion.php");
    include("read.php");

$id=$_GET['id'];

$sql="DELETE FROM administradores WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: ../vistas/admin_vista.php");
    }
?>