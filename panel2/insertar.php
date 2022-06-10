<?php
include("conexion.php");
$con=conectar();

if(!empty($_POST['guardar'])){
    echo 'despues de isset';
    $check = getimagesize($_FILES['imagen']['tmp_name']);
   if ($check !== false) { 
        echo 'insertar';
$tipoArchivo=$_FILES['imagen']['type'];
$permitido=array("image/png","image/jpeg");
if( in_array($tipoArchivo,$permitido) ==false ){
    die("Archivo no permitido");
}
$nombreArchivo=$_FILES['imagen']['name'];
$tamanoArchivo=$_FILES['imagen']['size'];
$imagenSubida=fopen($_FILES['imagen']['tmp_name'],'r');
$binariosImagen=fread($imagenSubida,$tamanoArchivo);
$imagen = $_FILES['imagen']['tmp_name'];
$imgContent = addslashes(file_get_contents($imagen));
// include_once "productos.php";
// $con = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
$binariosImagen=mysqli_escape_string($con,$binariosImagen);
// $query = "INSERT INTO imagenes (nombre       ,imagen            ,tipo) values

//                                         ('".$binariosImagen."')
// ";
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria']; 




$sql="INSERT INTO tabla_productos(nombre, descripcion, categoria, tipo,  imagen) VALUES('$nombre','$descripcion','$categoria', '$tipoArchivo', '$binariosImagen')";
$query= mysqli_query($con,$sql);



if($query){
    Header("Location: productos.php");

} else{

}
    

        }
    }

?> 