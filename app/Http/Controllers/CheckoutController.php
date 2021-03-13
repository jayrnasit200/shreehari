<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;
use Validator;
use App\Models\UserAddress;
use App\Models\Payment;
use Razorpay\Api\Api;

class CheckoutController extends Controller
{
    public function index()
    {
    	$userID=user_data()->id;
      $data['user_address'] = UserAddress::where('user_id',user_data()->id)->get()->all();
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
  	        	$address_2=null;
  	        if (request()->address_2) {
  	        	$address_2=request()->address_2;
  	        }
  	        $assress = UserAddress::create([
                                      'user_id'=>user_data()->id,
                                      'fname'=>request()->firstname,
                                      'lname'=>request()->lastname,
                                      'company'=>request()->$company,
                                      'address'=>request()->address_1,
                                      'address_2'=>$address_2,
                                      'city'=>request()->city,
                                      'post_code'=>request()->postcode,
                                      'country'=>request()->country_id,
                                      'state'=>request()->state,
                                    ]);
            return $assress->id;
        }else{
          	$validator = Validator::make(request()->all(), [
              'address' => 'required',
  	        ]);
  	        if ($validator->fails()) {
  				    return response()->json(['error'=>$validator->errors()->first()]);
  	        }
            return request()->address;
        }	
    }
    public function Razorpay_payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY','rzp_test_InMkyYjiVS3O8y'), env('RAZOR_SECRET','CfwiIVb9tK0lUfoWXqMZmnWG'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input) && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        // $payInfo = [
        //            'payment_id' => $request->razorpay_payment_id,
        //            'user_id' => '1',
        //            'amount' => $request->amount,
        //            'system' => 'credit',
        //            'user' => 'debit',
        //            'user_id' => 1,
        //         ];
                
        // Payment::insertGetId($payInfo);  
        
        \Session::put('success', 'Payment successful');

        return response()->json(['status' => 200,'success' => 'Payment successful','result' => '']);
    }
    public function payment_success()
    {
      return view('payment_success');
    }
}
