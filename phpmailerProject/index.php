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
            $mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'contato@leonardomadeira.com.br';                       //SMTP username
            $mail->Password   = '7799abab#Leo';                       //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //25 or 465 or 587 or 2525
            
            //Recipients
            $mail->setFrom('contato@leonardomadeira.com.br', 'Leonardo Madeira');       //Quem esta enviando
            $mail->addAddress('leo.madeira96@gmail.com', 'Nome do cliente');     //Pessoa que vai receber o recado
            
            /*
            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            */

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Titulo do email';                 //Titulo do email
            $mail->Body    = '<h1>Mensagem: Teste</h1>';  //Podemos utilizar html
            $mail->AltBody = 'Teste 2'; //Nesta parte não podemos usar html

            $mail->send(); //Send envia o email
            
            echo 'Mensagem enviada com sucesso! :)';
        } catch (Exception $e) {
            echo "Mensagem não foi enviada!!! :(";
        }

    ?>
</body>
</html>