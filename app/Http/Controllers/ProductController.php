<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductsImages;
use App\Models\ProductReview;

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
    	$product_sub=$data['pro']->subcategories_id;
        $data['sub_pro']=Products::where('subcategories_id',$product_sub)->take(10)->get();
    	return view('product')->with($data);
    }
    public function review()
    {
        $this->validate(request(), [
            "name" => "required",
            "text" => "required",
            "stars" => "required",
        ]);
        $model_number=request()->model_number;
        ProductReview::create([
            'product_id' => request()->id,
            'name' => request()->name,
            'msg' => request()->text,
            'stars' => request()->stars,
            'status' => 'success',
            ]);
       return redirect(url('product',$model_number))->with('msg_s', 'review send Successfully.');
    }
}
