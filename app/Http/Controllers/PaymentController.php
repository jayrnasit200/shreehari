<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;
use Validator;
use App\Models\UserAddress;
use App\Models\Payment;
use App\Models\Order;
use App\Models\OrdersProduct;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
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
        $payInfo = [
                   'payment_id' => request()->razorpay_payment_id,
                   'user_id' => user_data()->id,
                   'amount' => request()->amount,
                   'system' => 'credit',
                   'user' => 'debit',
                   'status' => 'success',
                ];
                
        $payment_id = Payment::create($payInfo); 
       // $payment_id=2;
       $invoice_number = 'SH-'.referral_code_generate(10);
       	$OrderInfo = [
                   'user_id' => user_data()->id,
                   'invoice_number' => $invoice_number,
                   'user_addresses_id' => request()->address,
                   'payment_id' => $payment_id->id,
                   'comments_about_your_order' => request()->comment,
                   'status' => 'padding',
                ];
                
        $Order = Order::create($OrderInfo); 

       $userID=user_data()->id;
		$product = \Cart::session($userID)->getContent();
	        foreach ($product as $key => $value) {
		       $Orderpro = [
		                   'orders_id' => $Order->id,
		                   'products_id' => $value->id,
		                   'vendor_id' => $value->attributes->vedor_id,
		                   'vendor_notification' => 'padding',
		                   'qty' => $value->quantity,
		                ];
		       OrdersProduct::create($Orderpro);

	        }
        // empty cart
         Cart::session($userID)->clear();
         
	    return $invoice_number;
    }
    public function payment_success()
    {
    	$invoice_number=$_GET['order'];
      $data['order']= $order = Order::where('invoice_number',$invoice_number)
                                       ->leftJoin('payments', 'orders.payment_id', '=', 'payments.id')
                                       ->get()->first();
      $data['Address'] = UserAddress::where('id',$order->user_addresses_id)->get()->first();
      $data['OrdersProduct'] = OrdersProduct::where('orders_id',$order->id)->get()->all();
      return view('payment_success')->with($data);
    }
    public function payment_cod()
    {
     //  echo "cod";
    	$payInfo = [
                   'payment_id' => null,
                   'user_id' => user_data()->id,
                   'amount' => request()->amount,
                   'system' => 'credit',
                   'user' => 'debit',
                   'status' => 'padding',
                ];
                
        $payment_id = Payment::create($payInfo); 
       // $payment_id=2;
       $invoice_number = 'SH-'.referral_code_generate(10);
       	$OrderInfo = [
                   'user_id' => user_data()->id,
                   'invoice_number' => $invoice_number,
                   'user_addresses_id' => request()->address,
                   'payment_id' => $payment_id->id,
                   'comments_about_your_order' => request()->comment,
                   'status' => 'padding',
                ];
                
        $Order = Order::create($OrderInfo); 

       $userID=user_data()->id;
		$product = \Cart::session($userID)->getContent();
	        foreach ($product as $key => $value) {
		       $Orderpro = [
		                   'orders_id' => $Order->id,
		                   'products_id' => $value->id,
		                   'vendor_id' => $value->attributes->vedor_id,
		                   'vendor_notification' => 'padding',
		                   'qty' => $value->quantity,
		                ];
		       OrdersProduct::create($Orderpro);

	        }
        // empty cart
         Cart::session($userID)->clear();
	    return $invoice_number;
    }
}
