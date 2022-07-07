<?php 
    include("../sql/conexion.php");
    include("../CRUD/read.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>UADY - Registro de Usuarios</title>
    <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

    <div class="login">
        <div class="login-header">
            <h4>Registro de Usuarios</h4>
        </div>

        <form action="../sql/registro_sql.php" method="post">
            <div class="login-form">

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

                <select name="rol" required>
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="Paciente">Paciente</option>
                    <option value="Administrador">Administrador</option>
                </select>
                <br>

                <button type="submit" class="boton_entrar" name="registrar">Registrar</button>
                <br>
                <a href="../index.php"><button type="button">Cerrar sesion</button></a>
            </div>
        </form>

        <div class="login-header">
            <h4>Tablas de Datos</h4>
        </div>

        <!-- empieza tabla administradores -->
        <div class="login-header">
            <h5>Tablas de Administradores</h5>
        </div>

        <div class="tabla_admins">
            <table class="table">
                <thead class="table-success table-striped">
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
                                         while($row=mysqli_fetch_array($query_admin)){
                        ?>
                    <tr>
                        <th><?php  echo $row['id']?></th>
                        <th><?php  echo $row['nombre']?></th>
                        <th><?php  echo $row['apellido_paterno']?></th>
                        <th><?php  echo $row['apellido_materno']?></th>
                        <th><?php  echo $row['email']?></th>
                        <th><?php  echo $row['telefono']?></th>

                        <th><a href="../CRUD/edit_admin.php?id=<?php echo $row['id'] ?>" class="btn_edit">Editar</a></th>
                        <th><a href="../CRUD/delete.php?id=<?php echo $row['id'] ?>" class="btn_delete">Eliminar</a>
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
        <div class="login-header">
            <h5>Tablas de Pacientes</h5>
        </div>

        <div class="tabla_admins">
            <table class="table">
                <thead class="table-success table-striped">
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
                                         while($row=mysqli_fetch_array($query_paci)){
                        ?>
                    <tr>
                        <th><?php  echo $row['id']?></th>
                        <th><?php  echo $row['nombre']?></th>
                        <th><?php  echo $row['apellido_paterno']?></th>
                        <th><?php  echo $row['apellido_materno']?></th>
                        <th><?php  echo $row['email']?></th>
                        <th><?php  echo $row['telefono']?></th>

                        <th><a href="../CRUD/edit_paci.php?id=<?php echo $row['id'] ?>" class="btn_edit">Editar</a></th>
                        <th><a href="../CRUD/delete.php?id=<?php echo $row['id'] ?>" class="btn_delete">Eliminar</a>
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
        <div class="login-header">
            <h5>Tablas de Usuarios</h5>
        </div>

        <div class="tabla_inicio">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>id</th>
                        <th>usuario</th>
                        <th>contraseña</th>
                        <th>rol</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                                         while($row=mysqli_fetch_array($query_ini)){
                        ?>
                    <tr>
                        <th><?php  echo $row['id']?></th>
                        <th><?php  echo $row['usuario']?></th>
                        <th><?php  echo $row['contraseña']?></th>
                        <th><?php  echo $row['rol']?></th>

                        <th><a href="../CRUD/edit_ini.php?id=<?php echo $row['id'] ?>" class="btn_edit">Editar</a></th>
                        <th><a href="../CRUD/delete.php?id=<?php echo $row['id'] ?>" class="btn_delete">Eliminar</a>
                        </th>
                    </tr>
                    <?php 
                                            }
                                        ?>
                </tbody>
            </table>
        </div>
        <!-- termina tabla inicio -->
    </div>
</body>

</html>