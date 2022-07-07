<?php
$servername = "localhost";
$database = "consultorio";
$user = "root";
$pass = "";

// Crea conexion
$conn = mysqli_connect($servername, $user, $pass, $database);

// verifica conexion
if (!$conn) {
    die("Fallo la conexion a la base de datos: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);
?>