<?php
include("../sql/conexion.php");
include("../sql/read.php");
include ("../assets/header.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Administradores</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style_header.css">
</head>

<body>
    <div class="hijo2">
        <h2>Tablas de Administradores</h2>

        <div class="tabla">
            <table border-collapse: separate; border = 1px; name="table_admins" style="text-align: center; height: 130px;width: 800px;">
                <thead style="color: orangered;">
                    <tr>
                        <th>ID</th>
                        <th>nombre</th>
                        <th>apellido paterno</th>
                        <th>apellido mateno</th>
                        <th>email</th>
                        <th>telefono</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query_admin)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido_paterno'] ?></td>
                        <td><?php echo $row['apellido_materno'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['telefono'] ?></td>

                        <th><a href="update_admin_vista.php?id=<?php echo $row['id'] ?>" class="btn_table">Editar</a></th>

                        <th><a href="../sql/delete_admin_sql.php?id=<?php echo $row['id'] ?>"class="btn_table">Eliminar</a></th>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <br><br>
            <a href="index_admins.php"><button class="btn" type="button">Regresar</button></a>
            
        </div>
    </div>
</body>

</html>