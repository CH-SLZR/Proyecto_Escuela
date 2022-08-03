<?php
include("../sql/conexion.php");
include("../sql/read.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
        <div class="hijo2">
            <h2>Tablas de Usuarios</h2>

            <div class="tabla_inicio">
                <table name="table_inicio" style="height: 130px;width: 650px;">
                    <thead style="color: orangered;">
                        <tr>
                            <th>id</th>
                            <th>usuario</th>
                            <th>contraseña</th>
                            <th>rol</th>
                            <th>id_admin</th>
                            <th>id_paciente</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    while ($row = mysqli_fetch_array($query_ini)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['usuario'] ?></td>
                            <td><?php echo $row['contraseña'] ?></td>
                            <td><?php echo $row['rol'] ?></td>
                            <td><?php echo $row['id_admin'] ?></td>
                            <td><?php echo $row['id_paci'] ?></td>

                            <!-- <th><a href="update_ini_vista.php?id=<//?php echo $row['id'] ?>" class="btn_edit">Editar</a></th>
                            <th><a href="../sql/delete_ini_sql.php?id=<//?php echo $row['id'] ?>" class="btn_delete">Eliminar</a></th> -->
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>