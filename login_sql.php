<?php
	include('conexion.php');

    $user = $_POST["user"];
    $pass = $_POST["contra"];
    //$rol = $_POST["rol"];

    session_start();
    $_SESSION['user']=$user;

    $sqlselect = "SELECT * FROM inicio WHERE usuario = '$user' and contraseña = '$pass' /*and rol = '$rol'*/";
	$seleccionar = mysqli_query ($conn,$sqlselect);

    $filas=mysqli_num_rows($seleccionar);

    if($filas){
        header("location:registro_vista.php");
    }else{
        echo "<script> alert('No fue posible iniciar sesion.');window.location = 'login_vista.php' </script>";
    }
?>