<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM slider where id='$id'";
$query=mysqli_query($conexion,$sql);


if($query){
    Header("Location: carusel.php");
}


?>
