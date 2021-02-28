<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;

class CartController extends Controller
{
    public function index()
    {
    	$userID=user_data()->id;
		$data['product'] = \Cart::session($userID)->getContent();
		$data['sub_total'] = Cart::session($userID)->getSubTotal();;
		return view('cart')->with($data);
    }
    public function add_cart()
    {
    	if (!empty(Auth::user()->id)) {
	    	$id=request()->id;
	    	$data=product_data($id);
			$userID=Auth::user()->id;
	    	$qty=1;
	    	Cart::session($userID)->add(array(
			    'id' => $data->id,
			    'name' => $data->name,
			    'price' => $data->price,
			    'quantity' => $qty,
			    'attributes' => $data,
			));
			return true;
    	}else{
    		return false;
    	}
    }
    public function cart_remove($id)
    {
    	$userID=user_data()->id;
		// Cart::session($userID)->clear();
    	Cart::session($userID)->remove($id);
    	return redirect('cart')->with('msg_s', 'Product remove Cart Successfully.');
    }
    public function cart_update()
    {
    	$id = request()->id;
    	$quantity = request()->quantity;
    	$data=product_data($id);
		$userID=Auth::user()->id;
        Cart::session($userID)->remove($id);
    	$data=product_data($id);
        Cart::session($userID)->add(array(
                'id' => $data->id,
                'name' => $data->name,
                'price' => $data->price,
                'quantity' => $quantity,
                'attributes' => $data,
            ));
        return redirect('cart')->with('msg_s', 'Cart Update Successfully.');
    }
}
