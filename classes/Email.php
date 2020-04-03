<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    class Email
    {
        private $mailer;

        public function __construct($host = null, $username = null, $senha = null, $nome = null)
        {
            try {

                $this->mailer = new PHPMailer;

                //$this->mailer->SMTPDebug = 3;
                $this->mailer->isSMTP();                                      // Set mailer to use SMTP
                $this->mailer->Host = $host;               // Host de disparo de emails do seu servidor
                $this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
                $this->mailer->Username = $username;   //SMTP usuário/email que vai enviar emails
                $this->mailer->Password = $senha; //                          // SMTP senha do usuário/email que envia email
                $this->mailer->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $this->mailer->Port = 2525;   
                
                /***
                ** se for usar o mailtrap.io para teste, colocar um e-mail válido aqui
                **/                    //esta certo aqui??
                $this->mailer->setFrom('lucelo361@gmail.com', $nome); //Enviado de 
                //$this->mailer->addReplyTo('lucelo361@gmail.com', $nome); //Responder para
                $this->mailer->isHTML(true); 
                $this->mailer->CharSet = 'UTF-8';
            
            } catch(Exception $e) {
                echo "Error no enviou";
            }
        }


        public function addAdress($email,$nome)
        {
            $this->mailer->addAddress($email,$nome);
        }

        public function formatarEmail($info)
        {
            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);
        }

        public function enviarEmail()
        {
           $this->mailer->send();

           if (!$this->mailer->ErrorInfo) {
             return true;
           } else {
            return false;
           }
            
        }

    }
?>