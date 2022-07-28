<?php 
    include("../sql/conexion.php");
    include("../sql/read.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM inicio WHERE id_admin='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <div class="geneal-form">
        <h1>Editar usuario del administrador</h1>
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

            <input type="submit" class="btn" value="Actualizar"><br><br>

            <a href="../vistas/admin_vista.php">
                <input type="submit" class="btn" value="Cancelar"></a>
        </form>
    </div>
</body>

</html>