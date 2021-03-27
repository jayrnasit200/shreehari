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
        $html = '<html><head>
                        <style type="text/css">
                            body,td,th {
                                color: #373737;
                                font-family: Tahoma, Verdana,sans-serif, Arial, Helvetica;  
                            }
                            body {
                                background-color: #d1c8c89e;
                            }
                            .tit {

                               font-size:14px;
                               color:#000000;
                               font-weight: bold; 
                            }
                            .writename {
                               font-size:12px;
                               color:#000000;
                               padding-left:180px;
                            }
                            .titbless {
                               font-size:18px;
                               color:#000000;
                            } 
                            .textpadding {
                               padding:0px 14px;
                            }
                            .content {

                               font-size:15px;
                               line-height:25px;
                               color:#000000;
                               letter-spacing:0.6px;
                            }
                            .footertext {
                                font-size:12px;
                                color:#646363;
                            }
                            
                            .cards01border {
                                border-top: 5px solid #000000;
                                border-bottom: 5px solid #000000;
                                background-color: #fff;

                            }
                            a:link {
                                color: #707070;
                                text-decoration: underline;
                            }
                            a:visited {
                                color: #707070;
                                text-decoration: underline;
                            }
                            a:hover {
                                color: #707070;
                                text-decoration: none;
                            }
                            a:active {
                                color: #707070;
                                text-decoration: underline;
                            }
                        </style>
                        </head>
                        <body>
                        <table width="641" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="30" align="left" >&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="355" align="left" valign="top" class="cards01border"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                          <tr>
                            <td align="center">
                              <h1>ShreeHari</h1>
                            </td>
                          </tr>
                                <tr>
                                  <td colspan="2" class="tit">Dear User,</td>
                                </tr>
                               
                                <tr>
                                  <td width="100%" height="108" class="content">'.$message.'</td>
                                  <td width="100%" class="content">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2" class="content">&nbsp;</td>
                                </tr>
                              </table></td>
                            </tr>
                        </table>
                        </body>
                        </html>';

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
        $mail->Body    = $html;
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
