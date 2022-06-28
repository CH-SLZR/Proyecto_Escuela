<!DOCTYPE html>
<html lang="es">

<head>
  <title>UADY - Registro de Usuarios</title>
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

    <div class="login">
        <div class="login-header">
            <br>
            <h4>Registro de Usuarios</h4>
        </div>

        <form method="post">
            <div class="login-form">

                <h5>Nombre:</h5>
                <input type="text" placeholder="Nombre(s)" name="name" required />
                <h5>Apellido Paterno:</h5>
                <input type="text" placeholder="Apellido Paterno" name="ape_pat" required />
                <h5>Apellido Materno:</h5>
                <input type="text" placeholder="Apellido Materno" name="ape_mat" required />
                <h5>Correo electronico:</h5>
                <input type="text" placeholder="Correo electronico" name="email" required />
                <h5>Telefono:</h5>
                <input type="text" placeholder="Telefono" name="tel" required />
                <h5>Usuario:</h5>
                <input type="text" placeholder="Usuario" name="user" required />
                <h5>Contraseña:</h5>
                <input type="text" placeholder="Contraseña" name="contra" required />

                <select name="rol" required>
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="Paciente">Paciente</option>
                    <option value="Administrador">Administrador</option>
                </select>
                <br>

                <button type="submit" class="boton_entrar">Registrar</button>
                <br>
                <a href="index.html"><button type="button">Cerrar sesion</button></a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include('conexion.php');

$name = $_POST["name"];
$ape_p = $_POST["ape_pat"];
$ape_m = $_POST["ape_mat"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$user = $_POST["user"];
$pass = $_POST["contra"];
$rol = $_POST["rol"];

if ($rol == "Paciente"){

	$sqlinsert = "INSERT INTO pacientes (nombre, apellido_paterno, apellido_materno, email, telefono)
	VALUES ('$name', '$ape_p', '$ape_m', '$email', '$tel')";

	$insercion = mysqli_query ($conn,$sqlinsert);

	if($insercion == 1){
		$sqlinsert = "INSERT INTO inicio (usuario, contraseña, rol)
			VALUES ('$user', '$pass', '$rol')";

		$insercion2 = mysqli_query ($conn,$sqlinsert);
		//echo "exito al insertar";

	}

}elseif ($rol == "Administrador"){
	
	$sqlinsert = "INSERT INTO administradores (nombre, apellido_paterno, apellido_materno, email, telefono)
	VALUES ('$name', '$ape_p', '$ape_m', '$email', '$tel')";

	$insercion = mysqli_query ($conn,$sqlinsert);

	if($insercion == 1){
		$sqlinsert = "INSERT INTO inicio (usuario, contraseña, rol)
			VALUES ('$user', '$pass', '$rol')";

		$insercion2 = mysqli_query ($conn,$sqlinsert);
		//echo "exito al insertar";

	}
	
} if($insercion2 == 1){
	echo "<script> alert('Registro realizado con exito.');window.location = 'registro_usuarios.php' </script>";
}else 
{
	echo "<script> alert('Intento de registro fallido. ');window.location = 'registro_usuarios.php' </script>";
	//echo "Error: ".$sql."<br>".mysql_error($conn);
}
?>