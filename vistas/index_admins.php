<?php
    include ("../assets/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Administradores</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style_header.css">
</head>

<body>
    <div class="hijo1">
        <h1>Control para Administradores</h1>
        <div class="admins-control">
            <a href="registro.php"><button type="button" class="btn2" name="entrar">Registrar Usuario</button></a>

            <a href="tabla_admins.php"><button type="button" class="btn2" name="entrar">Ver Administradores</button></a>

            <a href="tabla_pacientes.php"><button type="button" class="btn2" name="entrar">Ver Pacientes</button></a>

            <a href="tabla_usuarios.php"><button type="button" class="btn2" name="entrar">Ver Usuarios</button></a>
        </div>
        <a href="login_vista.php"><button class="btn" type="button" style="margin-top: 50px;">Cerrar Sesion</button></a>
    </div>
</body>

</html>