<?php
	if (isset($_POST['enviar'])) 
	{
		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']) ) 
		{

			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject= $_POST['subject'];
			$message = $_POST['message'];

			$header = 'From: santi031698@gmail.com'. " \r\n";
			$header .= 'Reply-to: santi031698@gmail.com'. " \r\n";
			$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
			$header .= "Mime-Version: 1.0 \r\n";
			$header .= "Content-Type: text/plain";

			$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
			$mensaje .= "Su e-mail es: " . $email . " \r\n";
			$mensaje .= "El asunto es: " . $subject . " \r\n";
			$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
			$mensaje .= "Enviado el " . date('d/m/Y', time());

			$para = 'santi031698@gmail.com';

			$mail=@mail($para, $subject,$mensaje, $header);

			if ($mail) 
				{
					header("Location:index.php");
				}
		}
	}
?>