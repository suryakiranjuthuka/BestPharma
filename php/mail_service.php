<?php

class EMail
{

       public function send_mail($email, $subject, $body,$target_file)

{
        require_once 'PHPMailer/PHPMailerAutoload.php';
        require_once 'PHPMailer/class.phpmailer.php';
        require_once 'PHPMailer/class.smtp.php';
        try
        {
           $mail = new PHPMailer(true);
    
        $mail->Host = 'relay-hosting.secureserver.net';  // specify main and backup server
//         $mail->Host = 'p3plcpnl0975.prod.phx3.secureserver.net';
        $mail->Port     = 25;
            $mail->Username = 'iamthinktanker@gmail.com'; // SMTP username
            $mail->Password = 'tnt12345'; // SMTP password
            $mail->From     = 'iamthinktanker@gmail.com';
            $mail->FromName = 'Best Pharma Precription!';
            $mail->AddAddress($email);
            $mail->AddReplyTo('iamthinktanker@gmail.com');
            $mail->WordWrap = 50;
            if($target_file != 1){ 
            $mail->AddAttachment($target_file);
        }// set word wrap to 50 characters
            $mail->IsHTML(true); // set email format to HTML
            $mail->Subject  = $subject;
            $mail->Body     = $body;
            if ($mail->Send())
            {
                return (1);
            }
            else
            {
                return(0);
            }
        }
        catch(phpmailerexception $e){
            echo $e->getMessage();
        }
    }
}

?> 