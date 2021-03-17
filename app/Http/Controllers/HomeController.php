<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use App\Models\Contact;
use App\Models\OrdersProduct;
use App\Rules\MatchOldPassword;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
     public function __construct()
    {
        // $this->middleware(['auth','verified']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['latest']=Products::orderBy('created_at', 'desc')->take(10)->get()->all();
        $data['best']=Products::where('verify', 'Yes')->inRandomOrder()->take(10)->get()->all();
        // print_r($data['LATEST']);
        return view('home')->with($data);
    }
    public function admin()
    {
        $data['titel']='Dashboard Admin';
        return view('admin.dashboard')->with($data);
    }
    public function vendor()
    {
        $data['Happy_Customers']= OrdersProduct::where('vendor_id',user_data()->id)->join('orders', 'orders_products.orders_id', '=', 'orders.id')->groupBy('orders.user_id')->count();
        $data['orders']= OrdersProduct::where('vendor_id',user_data()->id)->count();
        $data['Products']= Products::where('vedor_id',user_data()->id)->count();
        $data['orders_packing']= OrdersProduct::where('vendor_id',user_data()->id)->where('packing','padding')->count();
        $data['titel']='Dashboard';
        return view('vendor.dashboard')->with($data) ;
    }
    public function myaccount()
    {
        $data['titel']='Dashboard';
        return view('myaccount')->with($data);
    }
    public function myaccount_update()
    {
       User::where('id',user_data()->id)->update([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            ]);
       return redirect('myaccount')->with('msg_s', 'My Account Update Successfully.');
    }
    public function change_password()
    {
        return view('change_password');
    }
    public function change_password_submit()
    {
         request()->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => ['required'],
            'confirm_password' => ['required','same:password'],
        ]);
        User::where('id',user_data()->id)->update(['password'=> bcrypt(request()->password)]);
        Auth::logout();
       return redirect('/login')->with('msg_s', 'Password Change Successfully.');

    }
    public function term_and_conditions()
    {
        return view('term_and_conditions');
    }
    public function privacy_policy()
    {
       return view('privacy_policy');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contact_submit()
    {
        $this->validate(request(), [
            "name" => "required",
            "email" => "required",
            "massage" => "required",
        ]);

        Contact::create(['name'=>request()->name,'email'=>request()->email,'massage'=>request()->massage]);
         $subject = 'Contact from ShreeHari';
        $message = request()->massage;

        $mail_send = new SendMailController;
        $mail_send->send_mail(request()->email,$subject,$message);
       return redirect('/contact')->with('msg_s', 'Massage Send Successfully.');

    }
}
