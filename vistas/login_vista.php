<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="con">
        <div class="box">
            <h1>Inicio se sesión</h1>
            <form action="../sql/login_sql.php" method="post" class="login-form">
                <input type="text" name="user" placeholder="Usuario" required><br>

                <input type="Password" name="contra" placeholder="Contraseña" required><br>

                <!-- <input type="button" name="btn" value="Login " class="btn"> -->
                <button type="submit" class="btn" name="entrar">Ingresar</button>
            </form>
        </div>
    </div>
</body>

</html>