<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
    	$userID=user_data()->id;
  //   	Cart::clear();
		// Cart::session($userID)->clear();

		// view the cart items
		$items = \Cart::session($userID)->getContent();
		foreach($items as $row) {

			echo $row->id; // row ID
			echo $row->name;
			echo $row->qty;
			echo $row->price;
			
			// echo $item->associatedModel->id; // whatever properties your model have
		 //        echo $item->associatedModel->name; // whatever properties your model have
		 //        echo $item->associatedModel->description; // whatever properties your model have
		}
    }
    public function add_cart()
    {
    	print_r(request()->all());
    	exit();
    	$userID=user_data()->id;
    	Cart::session($userID)->add(array(
		    'id' => '1',
		    'name' => '$Product->name',
		    'price' => 150,
		    'quantity' => 4,
		    'attributes' => array(),
		    // 'associatedModel' => $Product
		));
    }
}
