<?php
include("../sql/conexion.php");
include("../sql/read.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>UADY - Registro de Usuarios</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
        <div class="hijo1">
            <h1>Registro de Usuarios</h1>

            <form action="../sql/registro_sql.php" method="post" class="admin-form">
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
                <br>

                <select name="rol" class="btn" required>
                    <label>Seleccionar</label></option>
                    <option value="Paciente">Paciente</option>
                    <option value="Administrador">Administrador</option>
                </select>
                <br> <br>

                <div class="botones">
                    <div class="btnreg">
                        <button type="submit" class="btn" name="registrar">Registrar</button>
                    </div>

                    <div class="btndlt">
                        <a href="../index.php"><button class="btn" type="button">Cerrar sesion</button></a>
                    </div>
                </div>
            </form>
        </div>
</body>

</html>