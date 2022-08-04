<?php
    include("../sql/conexion.php");
    include("read.php");

$id=$_GET['id'];

$sql2="DELETE FROM inicio WHERE id_paci='$id'";
$query2=mysqli_query($conn,$sql2);

$sql1="DELETE FROM pacientes WHERE id='$id'";
$query1=mysqli_query($conn,$sql1);

    if($query1){
        Header("Location: ../vistas/index_admins.php");
    }
?>