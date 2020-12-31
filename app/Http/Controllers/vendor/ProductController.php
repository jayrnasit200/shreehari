<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Products;
use App\Models\ProductsImages;
use DB;
use DataTables;

class ProductController extends Controller
{
    public function index()
    {
        $data['titel']='Product';
        return view('vendor.product.product_list')->with($data);
    	
    }
    public function create()
    {
        $data['titel']='Product';
        $data['categories'] = DB::table('categories')->get()->all();
        $data['types'] = DB::table('product_types')->get()->all();
        return view('vendor.product.product_create')->with($data);
    }
    public function add()
    {
        $model_number= substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
        
          $this->validate(request(), [
            'name' => 'required|string|max:255',
            'categories' => 'required',
            'subcategories' => 'required',
            'type' => 'required',
            'sub_types' => 'required',
            'short_dicaripsan' => 'required',
            'price' => 'required',
            'dicaripsan' => 'required',
            'discount' => 'required|lte:price',
        ]);
           $this->validate(request(), [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);

             $file = request()->file('image');

             $imagename=time().rand(1,100).'.'.$file->extension();
             $banner_url = 'upload/product/';
            $file->move($banner_url, $imagename);
     // print_r($validator);
             $product= Products::create([
              'model_number' => $model_number, 
              'name' => request()->name, 
              'categories_id' => request()->categories, 
              'subcategories_id' => request()->subcategories, 
              'shot_description' => request()->short_dicaripsan, 
              'description' => request()->dicaripsan, 
              'image' => $banner_url.$imagename, 
              'price' => request()->price, 
              'discount' => request()->dicaripsan, 
              'type_id' => request()->type, 
              'sub_types' => request()->sub_types, 
              'status' => 'enable', 
              'vedor_id' => auth()->user()->id, 
              'verify' => 'No', 
              ]);
            
    	// print_r($product->id);
        // echo "<pre>";
             if (request()->file('all_img')) {
                
                foreach (request()->file('all_img') as  $file) {
                     $imagename=time().rand(1,100).'.'.$file->extension();
                     $banner_url = 'upload/product/';
                    $file->move($banner_url, $imagename);
                        ProductsImages::create([
                              'product_id' => $product->id, 
                              'image' => $banner_url.$banner_url, 
                              ]);

                }
             }
         return redirect('product')->with('msg_s', 'product inserted successfully.');

    }
    public function subcategories($id)
    {
        $subcategories=DB::table('subcategories')->where('categories_id',$id)->get()->all();
        echo json_encode($subcategories);

    }
    public function sub_types($id)
    {
        $sub_types=DB::table('product_sub_types')->where('type_id',$id)->get()->all();
        echo json_encode($sub_types);

    }
    public function product_data()
    {
        $data = DB::table('products')->get();
        // print_r($data);
        // exit();
        return datatables($data)
           
          ->addColumn('action', function ($row) {
                    $delete_action = url("/banners/delete");
                        if ($row->status=='Enable') {
                        $status='<a href="'.url('/banners/status_update').'/'.$row->id.'" class="btn btn-sm btn-warning">Disable </a>';
                        }else{
                        $status='<a href="'.url('/banners/status_update').'/'.$row->id.'" class="btn btn-sm btn-success">Enable </a>';
                        }

                    return ' <a href="'.url('/banners/edit').'/'.$row->id.'" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a href="'.url('/banners/edit').'/'.$row->id.'" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                          <a onClick="confirmDelete(\''.$row->id.'\',\'Banners\',\''.$delete_action.'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';
                                
                })
                ->addColumn('image', function ($row) {
                      // $delete_action = url(Config::get('constant.ad_banner_dir'));
                      return url($row->image);
                            
                    })
            ->make();
    }
}
