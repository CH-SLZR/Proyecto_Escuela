<?php
include("../sql/conexion.php");
include("../sql/read.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>UADY - Registro de Usuarios</title>
    <!-- <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'> -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="padre">
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

        <!-- inician tablas -->
        <div class="hijo2">
            <h1>Tablas de Datos</h1>

            <!-- empieza tabla administradores -->
            <h2>Tablas de Administradores</h2>

            <div class="tabla_admins">
                <table name="table_admins" style="height: 130px;width: 800px;">
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
                    while ($row = mysqli_fetch_array($query_admin)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido_paterno'] ?></td>
                            <td><?php echo $row['apellido_materno'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['telefono'] ?></td>

                            <th><a href="update_admin_vista.php?id=<?php echo $row['id'] ?>"
                                    class="btn_table">Editar</a>
                            </th>

                            <th><a href="../sql/delete_admin_sql.php?id=<?php echo $row['id'] ?>"
                                    class="btn_table">Eliminar</a>
                            </th>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- termina tabla administradores -->

            <!-- empieza tabla pacientes -->
            <h2>Tablas de Pacientes</h2>

            <div class="tabla_pacientes">
                <table name="table_paci" style="height: 130px;width: 800px;">
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

                            <th><a href="../sql/delete_paci_sql.php?id=<?php echo $row['id'] ?>"
                                    class="btn_table">Eliminar</a>
                            </th>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- termina tabla pacientes -->

            <!-- empieza tabla inicio -->
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
            <!-- termina tabla inicio -->
        </div>
    </div>
</body>

</html>