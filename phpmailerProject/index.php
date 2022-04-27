<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        //Load Composer's autoloader
        require './lib/vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '7f17635b6f909d';                       //SMTP username
            $mail->Password   = '69ab488d803b71';                       //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 2525;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            
            //Recipients
            $mail->setFrom('atendimento@urldaempresa.com.br', 'Leonardo Madeira'); //Quem esta enviando
            $mail->addAddress('nomedocliente@gmail.com', 'Unknown');     //Pessoa que vai receber o recado
            
            /*
            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            */

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Mensagem automatiza :P';                 //Titulo do email
            $mail->Body    = '<h1>Olá, tudo bem? Fico feliz por ter entrado em contato comigo, assim que possivel retornarei o contato <b>in bold! :P</b></h1><br>Outra linha: Lorem Ipsum.';  //Podemos utilizar html
            $mail->AltBody = 'Olá, tudo bem? Fico feliz por ter entrado em contato comigo.\n'; //Nesta parte não podemos usar html

            $mail->send(); //Send envia o email
            
            echo 'Mensagem enviada com sucesso! :)';
        } catch (Exception $e) {
            echo "Mensagem não foi enviada!!! :( <br> Mailer Error: {$mail->ErrorInfo}";
        }

    ?>
</body>
</html>