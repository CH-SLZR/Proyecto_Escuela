<?php
    include("../sql/conexion.php");
    include("read.php");

$id=$_GET['id'];

//$sql1="DELETE FROM administradores WHERE id='$id'";
$sql2="DELETE FROM inicio WHERE id_admin='$id'";
$query=mysqli_query($conn,$sql1,$sql2);

    if($query){
        Header("Location: ../vistas/admin_vista.php");
    }
?>