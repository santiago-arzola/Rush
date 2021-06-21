<?php
   $Nombre = $_POST['nombre'];
   $Email = $_POST['email'];
   $numero = $_POST['numero'];
   $Tipo= $_POST['tipo'];
   $Mensaje = $_POST['mensaje'];
   $archivo = $_FILES['adjunto'];
   $to = "miguel.murillolan@gmail.com";
      
   require("archivosmail/class.phpmailer.php");
   $mail = new PHPMailer();
   $mail->From     = $to;
   $mail->FromName = $Nombre;
   $mail->AddAddress("miguel.murillolan@gmail.com");

?>