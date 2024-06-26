<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use App\Http\Controllers\SendMailController;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
    
            $user = Socialite::driver('google')->user();
     
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/');
     
            }else{

                 $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
		    		'role' => '3',
                    'google_id'=> $user->id,
                    'password' => encrypt('123456')
                ]);
                $subject = 'Thank you for your registration!';
                $message = 'Thank you for your registration visit website and Buy Best Product on Best Price.';

                    $mail_send = new SendMailController;
                    $mail_send->send_mail($user->email,$subject,$message);

                Auth::login($newUser);
     
                return redirect('/');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}