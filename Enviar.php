<?php
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject= $_POST['subject'];
			$message = $_POST['message'];

			$header = 'From:'.$email. " \r\n";
			$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
			$header .= "Mime-Version: 1.0 \r\n";
			$header .= "Content-Type: text/plain";

			$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
			$mensaje .= "Su e-mail es: " . $email . " \r\n";
			$mensaje .= "El asunto es: " . $subject . " \r\n";
			$mensaje .= "Mensaje: " . $message . " \r\n";
			$mensaje .= "Enviado el " . date('d/m/Y', time());

			$para = 'santi031698@gmail.com';

			mail($para, $subject,utf8_decode($mensaje), $header);

			header("Location:index.php");
	
?>