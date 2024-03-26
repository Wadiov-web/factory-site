<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../../vendor/autoload.php";

 $mail = new PHPMailer(true);

error_reporting(E_ALL);
ini_set("display_errors", 1);
$errors = [];
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['submit'])){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

        if($name && $email && $subject && $message !== ''){

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['msg'] = 'Invalid email yes';
                $_SESSION['err_form'] = $errors;
                header('Location: /contact');
                die();
            } else {
                global $mail;
                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'sardylia@gmail.com';                     //SMTP username
                    $mail->Password   = 'vvqzhxsnjislqkoy';                               //SMTP password
                    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('sardylia@gmail.com', 'My php app');
                    $mail->addAddress($email, $name);     //Add a recipient
                    // $mail->addAddress('ellen@example.com');               //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');

                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'contact';
                    $mail->Body    = 
                    "<h1>Customer Data</h1> 
                    <h2>Name: {$name}</h2>
                    <h2>Email Address: {$email}</h2>
                    <h2>Phone: {$phone}</h2>
                    <h2>Subject: {$subject}</h2>
                    <h3>Message</h3>
                    <h2>{$message}</h2>";
                    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                
                $_SESSION['success'] = 'Message is sent successfully';
                header('Location: /contact');
                die();
            }
        } else {
            $errors['msg'] = 'please fill in all fields';
            $_SESSION['err_form'] = $errors;
            foreach($_SESSION['err_form'] as $err){
                echo $err;
            }
            header('Location: /contact');
            die();
        }
    } else {
        header('Location: /contact');
        die();
    }
} else {
    header('Location: /contact');
    die();
}




function send_it_now(){
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sardylia@gmail.com';                     //SMTP username
        $mail->Password   = '123Suden#';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('sardylia@gmail.com', 'Mailer Sardy');
        //$mail->addAddress($email, $name);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        //$mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>'.
        // '<h1>Customer Data</h1>' .
        //   '<h2>Name:'  '</h2>'.
        //   '<h2>Email Address:'  '</h2>'.
        //   '<h2>Phone:' . $phone .'</h2>'.
        //   '<h2>Subject:' . $subject .'</h2>'.
        //   '<h3>Message</h3>'.
        //   '<h2>'. $message .'</h2>';;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}