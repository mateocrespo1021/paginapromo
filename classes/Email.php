<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;

    public $whatsapp;

    public $categoria;

    
    public function __construct($args=[])
    {
        $this->email = $args['email'];
        $this->nombre = $args['nombre'];
        $this->whatsapp = $args['whatsapp'];
        $this->categoria = $args['categoria'];
    }

    public function enviarEmail() {

         // create a new object
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = $_ENV['EMAIL_HOST'];
         $mail->SMTPAuth = true;
         $mail->Port = $_ENV['EMAIL_PORT'];
         $mail->Username = $_ENV['EMAIL_USER'];
         $mail->Password = $_ENV['EMAIL_PASS'];
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
     
         $mail->setFrom("matcre01@gmail.com", "WebWorks");
         $mail->addAddress('matcre01@gmail.com','Mateo');
         $mail->Subject = 'Nuevo Mensaje WebWorks';

         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';

         $contenido = '<html>';
         $contenido .= "<p><strong>Hola Mateo , tienes un mensaje de " . $this->nombre .  "</strong> Desea : </p>" . $this->categoria;
         $contenido .= "<p>Email: </p>" . $this->email;
         $contenido .= "<p>WhatsApp: </p>" . $this->whatsapp;
         $contenido .= '</html>';
         $mail->Body = $contenido;

         //Enviar el mail
         $mail->send();

    }

}

