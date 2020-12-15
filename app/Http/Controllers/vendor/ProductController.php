<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	echo "Product";
    }
    public function create()
    {
    	$data['titel']='Product';
        return view('vendor.product.product_create')->with($data);
    }
    public function add()
    {
    	# code...
    }
}
