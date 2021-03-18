<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use validate;
use DB;
class SettingController extends Controller
{
    public function index()
    {
    	$data['titel']='Setting';
        return view('admin.setting')->with($data);
    }
    public function setting_update()
    {
    	// echo "<pre>";
    	// print_r(Request()->all());
    	$this->validate(request(), [
            "site_name" => "required",
            "phone" => "required",
            "from_email_address" => "required|email",
            "copyright_text" => "required",
            "facebook" => "required|url",
            "linkedin" => "required|url",
            "twitter" => "required|url",
            "youtube" => "required|url",
            "instagram" => "required|url",
            "delivery_charges" => "required|numeric",
        ]);

    	$data = array('site_name', 'from_email_address', 'copyright_text', 'phone','facebook','linkedin','twitter','twitter','youtube','instagram','delivery_charges');
		foreach ($data as $val) {
			DB::table('web_configs')
				->where('option', $val)
				->update(['value' => request()->$val]);
		}
		return Redirect(admin().'setting')->with('flash_s', 'Settings updated successfully.');
    }
}
