<?php
    include("../sql/conexion.php");
    include("read.php");

$id = $_POST['id'];
$user = $_POST["user"];
$pass = $_POST["contra"];
$rol = $_POST["rol"];

$sql="UPDATE inicio SET id='$id', usuario='$user', contraseña='$pass' WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: ../vistas/admin_vista.php");
    }
?>