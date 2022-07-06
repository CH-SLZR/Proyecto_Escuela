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
            <br>
            <h4>Registro de Usuarios</h4>
        </div>

        <form action="../sql/registro_sql.php" method="post">
            <div class="login-form">

                <h5>Nombre:</h5>
                <input type="text" placeholder="Nombre(s)" name="name" required/>
                <h5>Apellido Paterno:</h5>
                <input type="text" placeholder="Apellido Paterno" name="ape_pat" required/>
                <h5>Apellido Materno:</h5>
                <input type="text" placeholder="Apellido Materno" name="ape_mat"required/>
                <h5>Correo electronico:</h5>
                <input type="text" placeholder="Correo electronico" name="email" required/>
                <h5>Telefono:</h5>
                <input type="text" placeholder="Telefono" name="tel" required/>
                <h5>Usuario:</h5>
                <input type="text" placeholder="Usuario" name="user" required/>
                <h5>Contraseña:</h5>
                <input type="text" placeholder="Contraseña" name="contra" required/>

                <select name="rol" required>
                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                    <option value="Paciente">Paciente</option>
                    <option value="Administrador">Administrador</option>
                </select>
                <br>

                <button type="submit" class="boton_entrar" name="registrar">Registrar</button>
                <br>
                <a href="login_vista.php"><button type="button">Cerrar sesion</button></a>
            </div>
        </form>
    </div>
</body>
</html>