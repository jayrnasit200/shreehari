<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductsImages;

class ProductController extends Controller
{
    public function index($id)
    {
    	$data['pro']=Products::where('id',$id)->get()->first();
    	$data['pro_img']=ProductsImages::where('product_id',$id)->get();
    	// echo "<pre>";
    	// print_r($data['pro_img']);
    	// exit();
    	return view('product')->with($data);
    }
}
