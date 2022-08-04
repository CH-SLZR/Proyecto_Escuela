<?php 
    include("../sql/conexion.php");
    include("../sql/read.php");
    include ("../assets/header.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM inicio WHERE id_paci='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Usuario de Paciente</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style_header.css">

</head>

<body>
    <div class="general-form">
        <h1>Editar usuario del paciente</h1>
        <form action="../sql/update_ini_sql.php" method="POST">

            <h5>ID:</h5>
            <input type="text" placeholder="ID" name="id" value="<?php echo $row['id'] ?>" readonly="readonly">

            <h5>Usuario:</h5>
            <input type="text" placeholder="Usuario" name="user" value="<?php echo $row['usuario'] ?>" required />

            <h5>Contraseña:</h5>
            <input type="text" placeholder="Contraseña" name="contra" value="<?php echo $row['contraseña'] ?>"
                required /> <br><br>

            <?php  echo $row['rol']?>
            <br><br>

            <div class="hijo1">
                <div class="admin-form">
                    <div class="botones">
                        <div class="btnreg">
                            <input type="submit" class="btn" value="Actualizar">
                        </div>

                        <div class="btndlt">
                            <a href="index_admins.php"><button class="btn" type="button">Cancelar</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</body>

</html>