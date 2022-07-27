<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>UADY - Ingreso de datos</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="login">
        <div class="login-form">

            <h1 style="text-align: center;">Ingresa tus datos</h1>

            <h4>Peso:</h4>
            <input type="text" placeholder="peso" name="peso" /><br>

            <h4>Edad:</h4>
            <input type="text" placeholder="edad" name="edad" /><br>

            <h4>Presion arterial:</h4>
            <input type="text" placeholder="presion arterial" name="pre_art" /><br>

            <h4>Oxigenacion:</h4>
            <input type="text" placeholder="oxigenacion" name="oxi" /><br>

            <h4>Latidos por minuto:</h4>
            <input type="text" placeholder="latidos por minuto" name="lat_min" /><br>

            <div class="botones">
                <div class="btnreg">
                    <button type="submit" class="btn">Obtener Rutina</button>
                </div>

                <div class="btndlt">
                    <a href="../index.php"><button class="btn" type="button">Cerrar sesion</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>