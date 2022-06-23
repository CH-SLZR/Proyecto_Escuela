<?php
 include('conexion.php');

$user = $_POST["user"];
$pass = $_POST["contra"];
$rol = $_POST["rol"];

$sqlselect = "SELECT usuario and contraseña and rol FROM inicio WHERE usuario = '$user' and contraseña = '$pass' and rol = '$rol'";
$seleccionar = mysqli_query ($conn,$sqlselect);

	
if ($seleccionar == 1 )
	{ 
		if($rol=="Paciente")
			{	
				header("Location: ingreso_datos.html");
			}
		else if ($rol=="Administrador")
			{
				header("Location: index_administradores.html");
			}
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location = 'index.html' </script>";
	}

?>