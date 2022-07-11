<?php 
    include("../sql/conexion.php");
    include("../sql/read.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM inicio WHERE id='$id'";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="../sql/update_ini_sql.php" method="POST">

            <h5>ID:</h5>
            <input type="text" placeholder="ID" name="id" 
                value="<?php echo $row['id'] ?>" readonly="readonly">

            <h5>Usuario:</h5>
            <input type="text" placeholder="Usuario" name="user" 
                value="<?php echo $row['usuario'] ?>" required />

            <h5>Contraseña:</h5>
            <input type="text" placeholder="Contraseña" name="contra" 
                value="<?php echo $row['contraseña'] ?>" required /> <br><br>

            <?php  echo $row['rol']?>
            <br><br>

            <input type="submit" class="btn_actualizar" value="Actualizar"><br><br>

            <a href="../vistas/admin_vista.php">
                <input type="submit" class="btn_cancelar" value="Cancelar"></a>
        </form>

    </div>
</body>

</html>