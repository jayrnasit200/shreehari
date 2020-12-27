<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Vendor;



class VendorController extends Controller
{
	public function register()
	{
        return view('vendor_register');
		
	}
    public function register_create()
    {
    		$this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // 'phone' => 'required',
            // 'about' => 'required|min:20',
            // 'address' => 'required',
        ]);


         User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => bcrypt(request()->password),
            'role' => '2',
        ]);

          Vendor::create([
            'name' => request()->name,
            'email' => request()->email,
            // 'address' => request()->address,
        ]);

         return redirect('/login')->with('msg_e', 'Your Account has been created successfully.');

    }

    function profile()
    {
        $data['titel']='Profile';
        return view('vendor.vendor_profile_create')->with($data);
    }
}
