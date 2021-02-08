<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Subcategory;

class CategoryController extends Controller
{
    public function index($cat_id,$subcategory_name){
    	$cat=Subcategory::where('name',$subcategory_name)->where('categories_id',$cat_id)->get()->first();
    	// print_r($cat_id);
    	// exit();
    	$data['products']=Products::where('subcategories_id',$cat->id)->inRandomOrder()->paginate(20);
    	$data['prod_count']=Products::where('subcategories_id',$cat->id)->count();
    	// print_r($data['product']);
    	// exit();
    	return view('category')->with($data);
    }
}
