<?php 
    include("../sql/conexion.php");
    include("../sql/read.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM pacientes WHERE id='$id'";
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
    <div class="container mt-5">
        <form action="../sql/update_paci_sql.php" method="POST">

            <h5>ID:</h5>
            <input type="text" placeholder="ID" name="id" 
                value="<?php echo $row['id'] ?>" readonly="readonly">

            <h5>Nombre:</h5>
            <input type="text" placeholder="Nombre(s)" name="name" 
                value="<?php echo $row['nombre'] ?>" required />

            <h5>Apellido Paterno:</h5>
            <input type="text" placeholder="Apellido Paterno" name="ape_pat"
                value="<?php echo $row['apellido_paterno'] ?>" required />

            <h5>Apellido Materno:</h5>
            <input type="text" placeholder="Apellido Materno" name="ape_mat"
                value="<?php echo $row['apellido_materno'] ?>" required />

            <h5>Correo electronico:</h5>
            <input type="text" placeholder="Correo electronico" name="email" 
                value="<?php echo $row['email'] ?>" required />

            <h5>Telefono:</h5>
            <input type="text" placeholder="Telefono" name="tel" 
                value="<?php echo $row['telefono'] ?>" required />
            <br><br>

            <input type="submit" class="btn" value="Actualizar"><br><br>
        </form>

        <!-- boton de editar usuario -->
        <?php
        while ($row = mysqli_fetch_array($query_paci)) {
        $row['id'];
        /*$row['nombre'];
        $row['apellido_paterno'];
        $row['apellido_materno'];
        $row['email'];
        $row['telefono'];*/
    ?>
    <a href="update_ini-paci_vista.php?id=<?php echo $row['id'] ?>" class="btn">Editar Usuario</a>
    <?php
        }
    ?>

            <a href="admin_vista.php">
            <input type="submit" class="btn" value="Cancelar"></a>
    </div>
</body>
</html>