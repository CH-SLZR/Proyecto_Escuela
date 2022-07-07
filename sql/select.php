<?php
include('conexion.php');

$select_admin="SELECT *  FROM administradores";
$query=mysqli_query($conn,$select_admin);

$select_paci="SELECT *  FROM pacientes";
$query=mysqli_query($conn,$select_paci);

$select_ini="SELECT *  FROM inicio";
$query=mysqli_query($conn,$select_ini);
?>