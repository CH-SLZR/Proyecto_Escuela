<?php 
    include("../sql/conexion.php");

$id=$_GET['id'];

$sql="SELECT * FROM administradores WHERE id='$id'";
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
        <form action="update.php" method="POST">

            <input type="text" name="id" value="<?php echo $row['id']  ?>">

            <h5>Nombre:</h5>
            <input type="text" placeholder="Nombre(s)" name="name" value="<?php echo $row['nombre'] ?>" required />

            <h5>Apellido Paterno:</h5>
            <input type="text" placeholder="Apellido Paterno" name="ape_pat"
                value="<?php echo $row['apellido_paterno'] ?>" required />

            <h5>Apellido Materno:</h5>
            <input type="text" placeholder="Apellido Materno" name="ape_mat"
                value="<?php echo $row['apellido_materno'] ?>" required />

            <h5>Correo electronico:</h5>
            <input type="text" placeholder="Correo electronico" name="email" value="<?php echo $row['email'] ?>"
                required />

            <h5>Telefono:</h5>
            <input type="text" placeholder="Telefono" name="tel" value="<?php echo $row['telefono'] ?>" required />

        </form>

    </div>
</body>

</html>