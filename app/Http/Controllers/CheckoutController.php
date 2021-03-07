<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;
use Validator;

class CheckoutController extends Controller
{
    public function index()
    {
    	$userID=user_data()->id;
    	$data['product'] = \Cart::session($userID)->getContent();
		$data['sub_total'] = Cart::session($userID)->getSubTotal();
        $data['delivery_charges'] = sys_config('delivery_charges');
		return view('checkout')->with($data);
    }
    public function checkout_address_chake()
    {
    	$validator = Validator::make(request()->all(), [
            'shipping_address' => 'required',
        ]);
        if ($validator->fails()) {
			return response()->json(['error'=>$validator->errors()->first()]);
        }
        if (request()->shipping_address == 'new') {
        	$validator = Validator::make(request()->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'country_id' => 'required',
            'state' => 'required',
	        ]);
	        if ($validator->fails()) {
				return response()->json(['error'=>$validator->errors()->first()]);
	        }
	        	$company=null;
	        if (request()->company) {
	        	$company=request()->company;
	        }
	        	$company=null;
	        if (request()->company) {
	        	$company=request()->company;
	        }
	        
        }else{
        	$validator = Validator::make(request()->all(), [
            'address' => 'required',
	        ]);
	        if ($validator->fails()) {
				return response()->json(['error'=>$validator->errors()->first()]);
	        }
        }	
    	
    }
}
