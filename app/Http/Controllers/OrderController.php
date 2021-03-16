<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
use App\Models\OrdersProduct;

class OrderController extends Controller
{
    public function index()
    {
		$data['order'] = Order::where('orders.user_id',user_data()->id)->join('payments as pay', 'pay.id', '=', 'orders.payment_id')
								->select('orders.id','orders.payment_id','orders.invoice_number','orders.payment_id','orders.status','orders.created_at','pay.amount','pay.payment_id','pay.status as pay_status')
								->get()->all();
			// echo "<pre>";
			// print_r($data['order']);
			// exit();
    	return view('order_history')->with($data);
    }
}
