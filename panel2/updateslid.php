<?php 

include ("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE slider set nombre='$nombre', descripcion='$descripcion' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: carusel.php"); 
}

?> 