<?php
    include("conexion.php");

$select_admin="SELECT * FROM administradores";
$query_admin=mysqli_query($conn,$select_admin);

$select_paci="SELECT * FROM pacientes";
$query_paci=mysqli_query($conn,$select_paci);

$select_ini="SELECT * FROM inicio";
$query_ini=mysqli_query($conn,$select_ini);
?>