<?php
if ( isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['asunto']) && isset($_POST['mensaje']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
 
$correop = $_POST["departamento"];
$receiver = "kichybiblioteca@gmail.com";
$subject = $_POST["asunto"];
$body = $_POST["mensaje"];
$sender = $_POST["email"];

if($correop == "Ventas")
{ 
    $receiver="thealldesigners@gmail.com"; 

    if(mail($receiver, $subject, $body, $sender)){
        echo " Mail enviado $receiver";
       }else{
       echo " Lo sentimos algo salió mal :(";
       }

}
elseif ($correop== "Compras")
{
    $receiver="kichybiblioteca@gmail.com"; 

    if(mail($receiver, $subject, $body, $sender)){
        echo " Mail enviado $receiver";
       }else{
       echo " Lo sentimos algo salió mal :(";
       }
}
elseif($correop== "Recursos Humanos")
{
    $receiver="juankichy@gmail.com"; 

    if(mail($receiver, $subject, $body, $sender)){
        echo " Mail enviado $receiver";
       }else{
       echo " Lo sentimos algo salió mal :(";
       }
}



//if(mail($receiver, $subject, $body, $sender)){
 //   echo "Email sent successfully to $receiver";
//}else{
 //   echo "Sorry, failed while sending mail!";
}
?>