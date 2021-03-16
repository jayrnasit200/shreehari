<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
     protected $redirectTo = '/';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $subject = 'Thank you for your registration!';
        $message = '<html lang="en"><head>
                        <style type="text/css">
                        body, div.outer{padding: 0px;margin: 0px;background-image: url(images/bg_body.gif);background-repeat: repeat-y no-repeat;background-position: top center;background-color: #3d4852;}
                        a:link, a:visited{color: #fd4d53;text-decoration: underline;}
                        a:hover, a:active{color: #3994b5;text-decoration: underline;}
                        td.date{background-image: url(images/header_mbg.gif);background-repeat: repeat-y no-repeat;background-position: top center;background-color: #f2f8fa;}
                        img{display: block;padding: 0;border: 0 none;margin: 0;}
                        img.inline{display: inline;vertical-align: middle;}
                        .texttopbottom p{font-family: Verdana, Arial, sans-serif; color: #8d9ca4;font-size: 10px;margin: 0; text-align:center;}
                        p.month{color: #4dc8da;font-family: Arial, Helvetica; font-size: 12px; line-height: 12px;margin: 0;padding: 0;text-transform: uppercase;}
                        p.year{color: #b4ebf3;font-family: "Arial Black", Arial, Helvetica;font-size: 18px;line-height: 18px;margin: 0;padding: 0;}
                        h1{color: #ffffff;font-family: "Arial Black", Arial, Helvetica; font-size: 48px; line-height: 39px; margin: 0;padding: 0;text-shadow: 0px 0px 1px #1b5362;}
                        .whitecol h2{color: #3994b5 !important;font-family: Arial, Helvetica;text-align: left;font-weight: normal;font-size: 30px;line-height: 32px;margin: 0 0 18px 0;}
                        .whitecol h3{color: #648d97 !important;font-family: Arial, Helvetica;text-align: left;font-weight: bold;font-size: 12px;margin: 0 0 6px 0;padding: 6px 0 0 0;}
                        .whitecol p{color: #4b5863;font-family: Verdana, Arial;text-align: left;font-size: 11px;line-height: 18px;margin: 0 0 8px 0;}
                        .whitecol ul, .whitecol ol{padding: 0;margin: 20px 0 10px 20px;}
                        .whitecol ul{list-style-image: url(images/bullet_white.gif);}
                        .whitecol ol{padding: 0;margin: 20px 0 0 20px;}
                        .whitecol ul li, .whitecol ol li{color: #4b5863;font-family: Verdana, Arial;font-size: 11px;line-height: 18px;padding: 3px 0 10px 0;border-top: 1px dotted #9c9c93;}
                        .border{border-bottom: 1px dotted #9c9c93;padding-bottom:15px;}
                        .backtotop{font-size: 11px;line-height: 24px;}
                        .backtotop a{background: url(images/backtotop.gif) top right no-repeat;padding: 0 17px 0 0;font-family: Verdana, Arial;}
                        .backtotop a:link, .backtotop a:visited{color: #92afb6;text-decoration: none;}
                        .backtotop a:hover, .backtotop a:active{color: #fd4d53;text-decoration: none;background-position: bottom right;}
                        .mb-editor-button{display: inline;}
                        </style>
                        </head>
                        <body style="    min-height: 50vh;">

                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td valign="top" align="center" id="top" class="outer" bgcolor="#3d4852" background="images/bg_body.gif">
                                    <table class="texttopbottom" cellpadding="0" cellspacing="0" align="center" width="600">
                                    </table>
                                    <table cellpadding="0" cellspacing="0" align="center" width="600" style="background: url(images/bg_email_singlecol.png) repeat-y;">
                                        <tr>
                                            <td style="background: url(images/bg_title.gif) no-repeat;" background="images/bg_title.gif" valign="bottom" colspan="3" height="65" align="center">
                                                <h1>
                                                    <singleline label="Title"> sheehari </singleline>
                                                </h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" align="left" valign="top">
                                                <table cellpadding="0" cellspacing="0" width="600" align="left">
                                                   
                                                    <tr>
                                                        <td valign="top" width="600">
                                                            <repeater>
                                                            <table cellpadding="0" cellspacing="0" width="600" class="whitecol">
                                                                <tr>
                                                                    <td valign="top" width="15" rowspan="3"></td>
                                                                    <td bgcolor="#eaf4f7" valign="top" width="21" rowspan="3"></td>
                                                                    <td bgcolor="#eaf4f7"><img src="images/blank.gif" alt="" width="1" height="20" /></td>
                                                                    <td bgcolor="#eaf4f7" rowspan="4"><img src="images/blank.gif" alt="" width="20" height="1" /></td>
                                                                    <td rowspan="4"><img src="images/blank.gif" alt="" width="15" height="1" /></td>
                                                                </tr>
                                                                <tr>                                            
                                                                    <td bgcolor="#eaf4f7" valign="top" width="529"><p><singleline label="Title">  
                                                                     Thank you for your registration visit website and Buy Best Product on Best Price</singleline></p></td>
                                                                </tr>
                                                               
                                                               
                                                            </table>
                                                            </repeater>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        </body>
                        </html>';

                    $mail_send = new SendMailController;
                    $mail_send->send_mail($data['email'],$subject,$message);
                    return User::create([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
                    ]);
        
    }
}
