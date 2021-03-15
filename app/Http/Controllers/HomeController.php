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
        $data['titel']='Dashboard';
        return view('vendor.dashboard')->with($data);
    }
    public function myaccount()
    {
        $data['titel']='Dashboard';
        return view('myaccount')->with($data);
    }
    public function myaccount_update()
    {
       
    }
}
