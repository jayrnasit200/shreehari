<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mail;

class SendMailController extends Controller
{
    public function send_mail($to,$subject,$message,$attachM=array())
	{
		//PHPMailer Object
        
        $api = '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';
        $mail=new PHPMailer();
        $mail->IsSMTP();    
        $mail->Port = 587;
        $mail->SMTPAuth = true;               
        //sendgrid
        $mail->Username="apikey";
        $mail->Password = $api;   //api key from sendgrid
        $mail->Host="smtp.sendgrid.net";
        $mail->SMTPSecure = 'tls';   
        $mail->From =  sys_config('from_email_address');
        $mail->FromName = sys_config('site_name') ;
        $mail->AddAddress($to);  // Add a recipient
        // $mail->addAddress('nikul@kartuminfotech.com');
        $mail->MsgHTML($message);
        $mail->isHTML(true);
        $mail->Body    = $message;
        $mail->Subject = $subject;
        $mail->isHTML(true);
        
        if(!empty($attachM)){
            foreach($attachM as $attach){
                // $newurl = $_SERVER["DOCUMENT_ROOT"].'/'.$attach;
                $newurl = $attach;
                $mail->addAttachment($newurl);
            }
        }
        
        // if(!$mail->Send()) {
        //     echo 'Message could not be sent.';
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        //     exit;
        // }
        
        try {
            $mail->send();
            return true;
        }
        catch (Exception $e) {
            $error = "Mailer Error: " . $mail->ErrorInfo;
            // exit;
            // return true;
            return false;
        }
        
    
	}
}
