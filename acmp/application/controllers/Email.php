<?php

class Email extends CI_Controller{
    
    function send(){
        $this->load->library('phpmailer_lib');

        $mail = $this->phpmailer_lib->load();

        $data="<p class='text-warning'>OKAY</p>";
        // SMTP Configuration

        $mail->IsSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'acmp.ust@gmail.com';
        $mail->Password = 'admin@acmp';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;

        $mail->setFrom('acmp.ust@gmail.com', 'Asthma Care');
        $mail->addReplyto('acmp.ust@gmail.com', "Asthma Care");
        
        //Email Recipient
        $mail->addAddress('alveroalexander@gmail.com');

        //Email Subject
        $mail->Subject = 'POTANG INA!';

        //Setting Email format to HTML
        $mail->isHTML(true);

        $mailContent="<h1> $data</h1>";

        $mail->Body = $mailContent;

        if(!$mail->send()){
            echo "Mailer Error ". $mail->ErrorInfo;
        }
        else{
            echo "Message Sent";
        }
    }
}