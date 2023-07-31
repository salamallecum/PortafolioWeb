<?php

//phpinfo();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//Capturamos el evento del boton de envio de formulario de contacto
if(isset($_POST['envioInfoContacto'])){

    //Capturamos los datos del formulario
    $nombre = trim($_POST['name']);
    $correoElectronico = trim($_POST['email']);
    $telefono = trim($_POST['cel']);
    $asunto = trim($_POST['subject']);
    $comentarios = trim($_POST['comments']);

    $mail = new PHPMailer(true);

    try{
        
        //Envia msjs en tiempo real de los msjs enviados
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

        //Configuramos el smtp para el envio de correos
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'alejoamaya1997@hotmail.com';
        $mail->Password = 'alejo1997';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Hacemos el envio del correo
        $mail->setFrom('alejoamaya1997@hotmail.com', 'PORTAFOLIO WEB');
        $mail->addAddress('luisalejandroamayatorres@gmail.com');
        //$mail->addCC('alejitoencuestas@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = 'Buen día, el usuario '.$nombre.' está tratando de contactarse contigo, su información de contacto es: <br>

                        Correo electrónico: '.$correoElectronico.'<br>
                        Teléfono: '.$telefono.'<br><br>
                        Comentarios: '.$comentarios.'<br><br>

                        Saludos cordiales.';

        $mail->send();

        header("Location: " . $_SERVER["HTTP_REFERER"]);

    }catch(Exception $e){
        echo 'Mensaje '. $mail->ErrorInfo;
    }
  
}

?>