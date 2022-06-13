<?php 

include ("conexion.php");

$con=conectar();

// $id=$_GET['id']; 

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria']; 

$sql="UPDATE tabla_productos set nombre='$nombre', descripcion='$descripcion', categoria='$categoria' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: productos.php"); 
}

?> 


