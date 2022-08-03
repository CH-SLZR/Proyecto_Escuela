<?php
include("../sql/conexion.php");
include("../sql/read.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pacientes</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="hijo2">

        <!-- empieza tabla pacientes -->
        <h2>Tablas de Pacientes</h2>

        <div class="tabla_pacientes">
            <table name="table_paci" style="text-align: center; height: 130px;width: 800px;">
                <thead style="color: orangered;">
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>apellido paterno</th>
                        <th>apellido mateno</th>
                        <th>email</th>
                        <th>telefono</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query_paci)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido_paterno'] ?></td>
                        <td><?php echo $row['apellido_materno'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['telefono'] ?></td>

                        <th><a href="update_paci_vista.php?id=<?php echo $row['id'] ?>" class="btn_table">Editar</a>
                        </th>

                        <th><a href="../sql/delete_paci_sql.php?id=<?php echo $row['id'] ?>"class="btn_table">Eliminar</a>
                        </th>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <a href="index_admins.php"><button class="btn" type="button">Regresar</button></a>
            
        </div>
    </div>
</body>

</html>