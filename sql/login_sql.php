<?php
	include('conexion.php');

    $user = $_POST["user"];
    $pass = $_POST["contra"];
    //$rol = $_POST["rol"];

    session_start();
    $_SESSION['user']=$user;

    $sqlselect = "SELECT * FROM inicio WHERE usuario = '$user' and contraseña = '$pass' /*and rol = '$rol'*/";
	$sqlselect = mysqli_query ($conn,$sqlselect);

    //$filas=mysqli_num_rows($seleccionar);

    if($sqlselect){
        header("location:../vistas/registro_vista.php");
    }else{
        echo "<script> alert('No fue posible iniciar sesion.');window.location = '../vistas/login_vista.php' </script>";
    }

    mysqli_close($conn);
?>
