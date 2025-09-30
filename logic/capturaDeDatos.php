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
    
    //VALIDACIONES DEL CAPTCHA
    $secret = "6LebIJwnAAAAAFj3qBJATq-hF7mOr6VQLVYqrVcc";
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
    $data = file_get_contents($url);
    $row = json_decode($data, true);

    if($row['success'] == "true"){
          
        //ENVIO DE CORREO DE CONTACTO
        $mail = new PHPMailer(true);

        try{
            
            //Envia msjs en tiempo real de los msjs enviados
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

            //Configuramos el smtp para el envio de correos
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'alejitoencuestas@gmail.com';
            $mail->Password = 'wdcf hedl sads oudh';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //Hacemos el envio del correo
            $mail->setFrom('alejitoencuestas@gmail.com', 'PORTAFOLIO WEB');
            $mail->addAddress('luisalejandroamayatorres@gmail.com');
            //$mail->addCC('alejitoencuestas@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body = 'Buen día, el/la Sr/Sra '.$nombre.' está intentando contactarse contigo, su información de contacto es: <br>

                            Correo electrónico: '.$correoElectronico.'<br>
                            Teléfono: '.$telefono.'<br><br>
                            Comentarios: '.$comentarios.'<br><br>

                            Saludos.';

            $mail->send();

            ?>
            <div class="alert alert-success" role="alert" style="display: flex;">
                <div>
                    <img src="assets/img/success.png" alt="">
                </div>
                <div>
                    <p>&nbsp;&nbsp;Información enviada satisfactoriamente.</p>
                </div>
            </div>
            <?php

        }catch(Exception $e){
            echo 'Mensaje '. $mail->ErrorInfo;
        }
    
    }else{
        ?>
        <div class="alert alert-warning" role="alert" style="display: flex;">
            <div>
               <img class="warnAlert" src="assets/img/warning.png" alt="">
            </div>
            <div>
                <p>&nbsp;Validación de CAPTCHA requerida. </p>
            </div>
        </div>
        <?php
    }

}

?>