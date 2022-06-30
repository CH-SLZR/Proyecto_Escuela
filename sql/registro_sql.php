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
	         echo "<script> alert('Registro realizado con exito.');window.location = 'registro_vista.php' </script>";
            }else {
	            echo "<script> alert('Intento de registro fallido. ');window.location = 'registro_vista.php' </script>";
	            //echo "Error: ".$sql."<br>".mysql_error($conn);
            }
?>