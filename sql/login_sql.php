<?php
	include('conexion.php');

    $user = $_POST["user"];
    $pass = $_POST["contra"];
    //$rol = $_POST["rol"];

    session_start();
    $_SESSION['user']=$user;

    $sqlselect = "SELECT * FROM inicio WHERE usuario = '$user' and contraseña = '$pass' /*and rol = '$rol'*/";
	$result = mysqli_query ($conn,$sqlselect);

    $filas=mysqli_fetch_array($result);

    if($filas['rol']=="Administrador"){
        header("location:../vistas/index_admins.php");

        }elseif($filas['rol']=="Paciente"){
            header("location:../vistas/rutina_vista.php");

        }else{
            echo "<script> alert('No fue posible iniciar sesion.
                                Usuario o contraseña incorrecto');window.location = '../vistas/login_vista.php' </script>";
        }

    mysqli_close($conn);
?>