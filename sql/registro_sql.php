<?php
include('conexion.php');
include('../CRUD/read.php');

        $name = $_POST["name"];
        $ape_p = $_POST["ape_pat"];
        $ape_m = $_POST["ape_mat"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $user = $_POST["user"];
        $pass = $_POST["contra"];
        $rol = $_POST["rol"];

		/*
		$row=mysqli_fetch_array($query_ini);
			$id_admin = $row["id_admin"];
			$id_paci = $row["id_paci"];
		*/

        if ($rol == "Paciente"){
	        $sqlinsert = "INSERT INTO pacientes (nombre, apellido_paterno, apellido_materno, email, telefono)
	        VALUES ('$name', '$ape_p', '$ape_m', '$email', '$tel')";
	        $insercion = mysqli_query ($conn,$sqlinsert);

	        if($insercion == 1){
				//lee el campo id de la tabla "pacientes"
				$sql="SELECT id FROM pacientes where '$name'=nombre";
				$query=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($query);
				$id_paci = $row['id'];

					$sqlinsert = "INSERT INTO inicio (usuario, contraseña, rol, id_admin, id_paci)
					VALUES ('$user', '$pass', '$rol', 'NULL', '$id_paci')";
	
					$insercion2 = mysqli_query ($conn,$sqlinsert);
					//echo "exito al insertar";
	        }

        }elseif ($rol == "Administrador"){
	        $sqlinsert = "INSERT INTO administradores (nombre, apellido_paterno, apellido_materno, email, telefono)
	        VALUES ('$name', '$ape_p', '$ape_m', '$email', '$tel')";
            $insercion = mysqli_query ($conn,$sqlinsert);

	            if($insercion == 1){
		            $sql="SELECT id FROM administradores where '$name'=nombre";
					$query=mysqli_query($conn,$sql);
					$row=mysqli_fetch_array($query);
					$id_admin = $row['id'];

						$sqlinsert = "INSERT INTO inicio (usuario, contraseña, rol, id_admin, id_paci)
						VALUES ('$user', '$pass', '$rol', '$id_admin', '')";
	
						$insercion2 = mysqli_query ($conn,$sqlinsert);
						//echo "exito al insertar";
	            }
	
        } 
		if($insercion2 == 1){
	         echo "<script> alert('Usuario registrado con exito.');window.location = '../vistas/admin_vista.php' </script>";
            }else {
	            echo "<script> alert('Usuario no registrado. ');window.location = '../vistas/admin_vista.php' </script>";
	            //echo "Error: ".$sql."<br>".mysql_error($conn);
            }
?>