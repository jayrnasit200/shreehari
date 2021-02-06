<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Subcategory;

class CategoryController extends Controller
{
    public function index($subcategory_name){
    	$cat=Subcategory::where('name',$subcategory_name)->get()->first();
    	$data['products']=Products::where('subcategories_id',$cat->id)->paginate(20);
    	$data['prod_count']=Products::where('subcategories_id',$cat->id)->count();
    	// print_r($data['product']);
    	// exit();
    	return view('category')->with($data);
    }
}
