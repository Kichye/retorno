<?php
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$mail=$_POST['Email'];
$pass=$_POST['Contraseña'];

$conexion=mysqli_connect("localhost", "root", "", "loginret");

$query="INSERT INTO usuarios (nombre,apellido,correo,contra) VALUES ('$nombre','$apellido','$mail','$pass')";
$resultado=$conexion->query($query);


if ($resultado){
    header("location:index.php");

}else{
?>
<?php
include("login.html");
?>
  <div class="alert alert-danger" role="alert">
  Ingrese Datos Correctamente
</div>  

<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
