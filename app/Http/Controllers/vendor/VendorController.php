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
        $data['vendor_data']=  Vendor::where('email',user_data()->email)->get()->first();
        return view('vendor.vendor_profile_create')->with($data);
    }
    public function profile_update()
    {

        $this->validate(request(), [
            'phone' => 'required',
            'about' => 'required',
            'address' => 'required',
            'name' => 'required',
        ]);
        $bg_img=null;
        if (request()->bg_img) {
            $file=request()->bg_img;
             $imagename=time().rand(1,100).'.'.$file->extension();
             $banner_url = 'upload/product/';
                $file->move($banner_url, $imagename);
                $bg_img = $banner_url.'/'.$imagename;
        }
        $profile_pci=null;
        if (request()->profile_pci) {
             $files=request()->profile_pci;
             $imagename=time().rand(1,100).'.'.$files->extension();
             $banner_url = 'upload/product/';
                $files->move($banner_url, $imagename);
                $profile_pci = $banner_url.'/'.$imagename;
        }
        User::where('id',user_data()->id)->update([
            'name' => request()->name,
            'phone' => request()->phone,
            // 'address' => request()->address,
        ]);
        Vendor::where('email',user_data()->email)->update([
            'about' => request()->about,
            'name' => request()->name,
            'phone' => request()->phone,
            'address' => request()->address,
            'logo' => $profile_pci,
            'bg_image' => $bg_img,
        ]);
        return redirect(vendor().'vendor')->with('msg_s', 'Your Profile update successfully.');
    }
}
