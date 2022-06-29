<!DOCTYPE html>
<html lang="es">

<head>
  <title>UADY - Inicio de Sesion</title>
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

  <div class="login">
        <div class="login-header">
            <br>
            <h4>Inicio de Sesion</h4>
        </div>

        <form action="login_sql.php" method="post">
            <div class="login-form">

                <h5>Usuario:</h5>
                <input type="text" placeholder="Usuario" name="user" required /><br>
                <h5>Contraseña:</h5>
                <input type="password" placeholder="Contraseña" name="contra" required /><br>

                <!-- <select name="rol">
                <option value="0" style="display:none;"><label>Seleccionar</label></option>
                <option value="Paciente">Paciente</option>
               <option value="Administrador">Administrador</option>
                </select> -->

                <button type="submit" class="boton_entrar" name="entrar">Entrar</button>
            </div>
        </form>
  </div>
</body>

</html>