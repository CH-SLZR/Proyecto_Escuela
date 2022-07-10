<?php
    include("../sql/conexion.php");
    include("read.php");

$id = $_POST['id'];
$name = $_POST["name"];
$ape_pat = $_POST["ape_pat"];
$ape_mat = $_POST["ape_mat"];
$email = $_POST["email"];
$tel = $_POST["tel"];

$sql="UPDATE pacientes SET id='$id', nombre='$name', apellido_paterno='$ape_pat', apellido_materno='$ape_mat', email='$email', telefono='$tel' WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: ../vistas/admin_vista.php");
    }
?>