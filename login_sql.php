<?php

session_start();
if(isset($_SESSION['name_user'])){
	header('');
}

if (isset ($_POST['boton_entrar'])){
	
	include('conexion.php');

	$user = $_POST["user"];
	$pass = $_POST["contra"];
	//$rol = $_POST["rol"];
	
	$sqlselect = "SELECT * FROM inicio WHERE usuario = '$user' and contraseña = '$pass' /*and rol = '$rol'*/";
	$seleccionar = mysqli_query ($conn,$sqlselect);

	if($seleccionar ==  1){
		header('registro_vista.php');
	}
}

?>