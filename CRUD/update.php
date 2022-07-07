<?php
    include("../sql/conexion.php");
    include("read.php");

$name = $_POST["name"];
$ape_p = $_POST["ape_pat"];
$ape_m = $_POST["ape_mat"];
$email = $_POST["email"];
$tel = $_POST["tel"];

$sql="UPDATE administradores SET nombre='$name', apellido_paterno='$ape_pat', apellido_mateno='$ape_mat', email='$email', telefono='$tel' WHERE nombre='$name'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: create.php");
    }
?>