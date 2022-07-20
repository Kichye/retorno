<?php 

include ("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria']; 

$sql="UPDATE productos set nombre='$nombre', descripcion='$descripcion', categoria='$categoria' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: productos.php"); 
}

?> 


