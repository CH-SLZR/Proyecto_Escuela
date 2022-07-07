<?php 
    include("../sql/conexion.php");
    include("read.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Pagina Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">

                    <h5>Nombre:</h5>
                    <input type="text" placeholder="Nombre(s)" name="name" required /><br><br>

                    <h5>Apellido Paterno:</h5>
                    <input type="text" placeholder="Apellido Paterno" name="ape_pat" required /><br><br>

                    <h5>Apellido Materno:</h5>
                    <input type="text" placeholder="Apellido Materno" name="ape_mat" required /><br><br>

                    <h5>Correo electronico:</h5>
                    <input type="text" placeholder="Correo electronico" name="email" required /><br><br>

                    <h5>Telefono:</h5>
                    <input type="text" placeholder="Telefono" name="tel" required /><br><br>

                    <h5>Usuario:</h5>
                    <input type="text" placeholder="Usuario" name="user" required /><br><br>

                    <h5>Contraseña:</h5>
                    <input type="text" placeholder="Contraseña" name="contra" required /><br><br>

                    <select name="rol" required>
                        <option value="0" style="display:none;"><label>Seleccionar</label></option>
                        <option value="Paciente">Paciente</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                    <br><br>

                    <button type="submit" class="boton_entrar" name="registrar">Registrar</button>
                    <br><br>
                    <a href="../index.php"><button type="button">Cerrar sesion</button></a>
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>nombe</th>
                            <th>apellido paterno</th>
                            <th>apellido mateno</th>
                            <th>email</th>
                            <th>telefono</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                         while($row=mysqli_fetch_array($query_admin)){
                        ?>
                        <tr>
                            <th><?php  echo $row['nombre']?></th>
                            <th><?php  echo $row['apellido_paterno']?></th>
                            <th><?php  echo $row['apellido_materno']?></th>
                            <th><?php  echo $row['email']?></th>
                            <th><?php  echo $row['telefono']?></th>
                            
                            <th><a href="edit.php?id=<?php echo $row['id'] ?>"
                                    class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['id'] ?>"
                                    class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php 
                                            }
                                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>