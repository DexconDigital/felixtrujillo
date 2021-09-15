<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
    $nombre = $_POST['name'];
    $mensaje = $_POST['message'];
    $telefono = $_POST['telefono'];
    $codigo  = $_POST['codigo'];
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
    $mail->setFrom('no-reply@felixtrujillofalla.com', 'no-reply@feliztrujillofalla.com');
    $mail->addAddress('atencionalcliente@felixtrujillofalla.com');
    $mail->Subject='Mensaje desde la pagina web de Inmobiliaria Feliz Trujillo Falla sobre un inmueble';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir informacion sobre el inmueble con el codigo '.$codigo.' </span>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                        <li>Codigo del Inmueble: '.$codigo.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='../inmuebles.php'</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
?>