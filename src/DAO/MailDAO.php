<?php

namespace App\src\DAO;

class MailDAO

{
    public function sendmail()
    {
        $to = 'annemarchasson@yahoo.fr';
        $subject ='Formulaire de contact';
        $from = $_POST['email'];
        $message = $_POST['message'];
        $headers = "De :" . $from;

        mail($to,$subject, $message, $headers);
    }

}

