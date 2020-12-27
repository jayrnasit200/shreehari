<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

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
        
          $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'categories' => 'required',
            'subcategories' => 'required',
            'type' => 'required',
            'sub_types' => 'required',
            'short_dicaripsan' => 'required',
            'dicaripsan' => 'required',
            'price' => 'required',
            // 'discount' => 'required',
            'image' => 'required',
        ]);
            //  $file = request()->file('image');
            
            //  $imagename=time().rand(1,100).'.'.$file->extension();
            //  $banner_url = Config::get('constant.ad_banner_dir');
            // $file->move($banner_url, $imagename);
     // print_r($validator);
        if ($validator->passes()) {
              TetsAjax::create([
              'model_number' => request()->id, 
              'name' => request()->id, 
              'categories_id' => request()->id, 
              'subcategories_id' => request()->id, 
              'shot_description' => request()->id, 
              'description' => request()->id, 
              'image' => request()->id, 
              'price' => request()->id, 
              'discount' => request()->id, 
              'type_id' => request()->id, 
              'sub_types' => request()->id, 
              'status' => 'enable', 
              'vedor_id' => auth()->user()->id, 
              'verify' => 'No', 
              ]);
             return response()->json(['success'=>'Added new records.']);
        }
      return response()->json(['error'=>$validator->errors()->all()]);

    	
    }
}
