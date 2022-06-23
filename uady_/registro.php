<?php
include('conexion.php');
include('random.php');

$name = $_POST["name"];
$ape_p = $_POST["ape_pat"];
$ape_m = $_POST["ape_mat"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$user = $_POST["user"];
$pass = $_POST["contra"];
$rol = $_POST["rol"];

if ($rol == "Paciente"){

	$sqlinsert = "INSERT INTO pacientes (id, nombre, apellido_paterno, apellido_materno, email, telefono)
	VALUES ('$codigo', '$name', '$ape_p', '$ape_m', '$email', '$tel')";

	$insercion = mysqli_query ($conn,$sqlinsert);

	if($insercion == 1){
		$sqlinsert = "INSERT INTO inicio (id, usuario, contraseña, rol)
			VALUES ('$codigo','$user', '$pass', '$rol')";

		$insercion2 = mysqli_query ($conn,$sqlinsert);
		//echo "exito al insertar";

	}

}elseif ($rol == "Administrador"){
	
	$sqlinsert = "INSERT INTO administradores (id, nombre, apellido_paterno, apellido_materno, email, telefono)
	VALUES ('$codigo', '$name', '$ape_p', '$ape_m', '$email', '$tel')";

	$insercion = mysqli_query ($conn,$sqlinsert);

	if($insercion == 1){
		$sqlinsert = "INSERT INTO inicio (id, usuario, contraseña, rol)
			VALUES ('$codigo','$user', '$pass', '$rol')";

		$insercion2 = mysqli_query ($conn,$sqlinsert);
		//echo "exito al insertar";

	}
	
} if($insercion2 == 1){
	echo "<script> alert('Registro realizado con exito.');window.location = 'registro_usuarios.html' </script>";
}else 
{
	echo "<script> alert('Intento de registro fallido. ');window.location = 'registro_usuarios.html' </script>";
	//echo "Error: ".$sql."<br>".mysql_error($conn);
}
?>