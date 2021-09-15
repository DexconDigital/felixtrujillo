<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $ciudad = $_POST['ciudad'];
    $transaccion = $_POST['transaccion'];
    $inmueble = $_POST['tipo_inm'];
    $valor = $_POST['valor'];
    $area = $_POST['area'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
}


$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('no-reply@feliztrujilllofalla.com', 'No-Reply@feliztrujilllofalla.com');
    $mail->addAddress('administracion@felixtrujillofalla.com');
    $mail->Subject='Mensaje desde la pagina web Feliz Trujillo Falla';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir informacion sobre como conisgnar un inmueble</span>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Ciudad: '.$ciudad.'</li>
                        <li>quiere consignar su inmueble en: '.$transaccion.'</li>
                        <li>Tipo de inmueble: '.$inmueble.'</li>
                        <li>Valor: '.$valor.'</li>
                        <li>area: '.$area.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='../index.php';</script>";

}catch(Exception $e){
	$email_from = "no-reply@feliztrujillofalla.com";
	$email_to = "administracion@felixtrujillofalla.com";
    $asunto ="Mensaje desde la pagina de Dimensiones";
	$message = '<html>'.
	'<head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">'.
	'<title>Correo desde la Web de Felix trujillo falla</title>'.
	'</head>'.
	'<body>'.
	'<span>Hola, '.$nombre.' quiere consignar un inmueble </span>'.
                    '<ul>'.
                        '<li>Correo: '.$email.'</li>'.
                        '<li>Telefono: '.$telefono.'</li>'.
                        '<li>Ciudad: '.$ciudad.'</li>'.
                        '<li>quiere consignar su inmueble en: '.$transaccion.'</li>'.
                        '<li>Tipo de inmueble: '.$inmueble.'</li>'.
                        '<li>Valor: '.$valor.'</li>'.
                        '<li>area: '.$area.'</li>'.
                        '<li>Mensaje: '.$mensaje.'</li>'.
                    '</ul>'.
	'</body>'.
	'</html>';
	

	
	// create email headers
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'Reply-To:'. $email_from . "\r\n" .
			'From:' . $email_from . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	$email = @mail($email_to, $asunto, wordwrap($message), $headers);

	echo "<script>window.location.href='/consignar-inmueble.php?correo=1';</script>";
}
?>