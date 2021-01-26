<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductsImages;

class ProductController extends Controller
{
    public function index($code)
    {
    	$data['pro']=Products::where('products.model_number',$code)
    	            ->join('subcategories', 'products.subcategories_id', '=', 'subcategories.id')
    					->select('products.id','model_number','products.name','products.categories_id','subcategories_id','shot_description','description','products.image','price','discount','status','vedor_id','verify','subcategories.name as subcat_name')
    				->get()->first();
    	$product_id=$data['pro']->id;
    	$data['pro_img']=ProductsImages::where('product_id',$product_id)->get();
	    	// echo "<pre>";
	    	// print_r();
	    	// exit();
    	return view('product')->with($data);
    }
}
