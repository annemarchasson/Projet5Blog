<?php

namespace App\src\DAO;

class MailDAO

{
    public function sendmail()
    {
        $to = 'annemarchasson@yahoo.fr';
        $subject ='Formulaire de contact';
        $email = $_POST['email'];


        $message = "Message de ".$_POST['firstname']." ".$_POST['lastname'].": "."\r\n";
        $message .= $_POST['message']."\r\n";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: <'.$email.'>'."\r\n\r\n";


        mail($to, $subject, $message, $headers);
    }

}

