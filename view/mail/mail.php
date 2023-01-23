<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
    require_once __DIR__ . './../../config.php';
    require_once __DIR__ . './../verification.php';

    function phpmailer($code)
    {
        $name = $_POST['namee'];
        $email = $_POST['emaill'];
        $message = $_POST['messagee'];
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'mnachit333@gmail.com';                     //SMTP username
        $mail->Password   = 'zacjxozefonfrbrb';                               //SMTP password
        $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
        $mail->Port       = 465;     
        //Content
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";
        
        $mail->setFrom('mnachit333@gmail.com', 'mohamed nachit');
        $mail->addAddress('nachitmed70@gmail.com');
        $mail->Subject = 'help';
        $mail->Body    = 'je suis '.$name.', mon courrier est  '.$email.'click <a href="http://localhost/E-Lyrics/view/verification.php?code='.$code.'">Here</a> to verify your email';
        $mail->AltBody = $message;
        $mail->send();
    }

    function phpmailer1()
    {
        $name = $_POST['namee'];
        $email = $_POST['emaill'];
        $message = $_POST['messagee'];
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'mnachit333@gmail.com';                     //SMTP username
        $mail->Password   = 'zacjxozefonfrbrb';                               //SMTP password
        $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
        $mail->Port       = 465;     
        //Content
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";
        
        $mail->setFrom('mnachit333@gmail.com', 'mohamed nachit');
        $mail->addAddress('nachitmed70@gmail.com');
        $mail->Subject = 'help';
        $mail->Body    = 'je suis '.$name.', mon courrier est  '.$email.'click <a href="http://localhost/E-Lyrics/view/Forgot_Password1.php">Here</a> to forgot passwoard your email';
        $mail->AltBody = $message;
        $mail->send();
    }