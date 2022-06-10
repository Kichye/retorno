<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM tabla_productos where id='$id'";
$query=mysqli_query($con,$sql);


if($query){
    Header("Location: productos.php");
}


?>
