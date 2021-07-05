<?php
$mail = "Prueba de mensaje";
//Titulo
$titulo = "PRUEBA DE TITULO";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Santi031698@gmail.com\r\n";
//Enviamos el mensaje a tu_dirección_email 
$success = mail("Santi031698@gmail.com",$titulo,$mail,$headers);
if($success){
    $errorMessage = error_get_last()['message'];
}else{
    echo "Mensaje no enviado";
}
?>