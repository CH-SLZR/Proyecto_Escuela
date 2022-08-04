<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>UADY - Ingreso de datos</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="hijo1">
        <h1 style="text-align: center;">Ingresa tus datos</h1>

        <form action="../sql/rutina_sql.php" method="post" class="admin-form">

            <h4>Peso:</h4>
            <input type="int" placeholder="peso" name="peso" /><br>

            <h4>Edad:</h4>
            <input type="int" placeholder="edad" name="edad" /><br>

            <h4>Presion arterial:</h4>
            <input type="text" placeholder="presion arterial" name="pre_art" /><br>

            <h4>Oxigenacion:</h4>
            <input type="text" placeholder="oxigenacion" name="oxi" /><br>

            <h4>Latidos por minuto:</h4>
            <input type="text" placeholder="latidos por minuto" name="lat_min" /><br>

            <select name="sexo" class="btn" style="width: auto;" required>
                <label>Seleccionar</label></option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
            <br><br>

            <div class="botones">
                <div class="btnreg">
                    <button type="submit" class="btn">Obtener Rutina</button>
                </div>

                <div class="btndlt">
                    <a href="../index.php"><button class="btn" type="button">Cerrar sesion</button></a>
                </div>
            </div>

        </form>

    </div>
</body>

</html>