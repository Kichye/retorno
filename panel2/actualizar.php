<?php

    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM tabla_productos WHERE id='$id'";
    $query=mysqli_query($con,$sql);

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
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   
</head>
<body>
            <div class="container mt-5">
            <form action="update.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                    <input type="text" class="form-control mb-3" name="nombre" value="<?php echo $row['nombre'] ?>">
                    <input type="text" class="form-control mb-3" name="descripcion" value="<?php echo $row['descripcion'] ?>">
                    <input type="text" class="form-control mb-3" name="categoria" value="<?php echo $row['categoria'] ?>">

                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">

            </form>

            </div>

             <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

