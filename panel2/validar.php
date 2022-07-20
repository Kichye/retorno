<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost", "root", "", "loginret");

$consulta="SELECT*FROM usuarios where correo ='$usuario' and contra='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header("location:index.php");

}else{
?>
<?php
include("login.html");
?>
  <div class="alert alert-danger" role="alert">
  Datos incorrectos
</div>  

<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);

