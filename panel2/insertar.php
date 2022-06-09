<?php
include("conexion.php");
$con=conectar();
if(isset($_REQUEST['guardar'])){
    if(isset($_FILES['foto']['name'])){
$tipoArchivo=$_FILES['foto']['type'];

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria'];
$imagen=$_POST['imagen'];



$sql="INSERT INTO tabla_productos VALUES('$nombre','$descripcion','$categoria','$imagen'";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: productos.php");

} else{

}
    }
}
?> 