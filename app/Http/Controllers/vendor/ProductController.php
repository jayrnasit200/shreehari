<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Products;
use App\Models\ProductsImages;
use DB;
use DataTables;
use App\Models\Category;

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
        // $data['types'] = DB::table('product_types')->get()->all();
        return view('vendor.product.product_create')->with($data);
    }
    public function add()
    {
        $model_number= substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
        
          $this->validate(request(), [
            'name' => 'required|string|max:255',
            'categories' => 'required',
            'subcategories' => 'required',
            // 'type' => 'required',
            // 'sub_types' => 'required',
            'short_dicaripsan' => 'required',
            'price' => 'required|lte:discount',
            'discount' => 'required',
            'dicaripsan' => 'required',
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
              'discount' => request()->discount, 
              // 'type_id' => request()->type, 
              // 'sub_types' => request()->sub_types, 
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
                              'image' => $banner_url.$imagename, 
                              ]);

                }
             }
         return redirect(vendor().'product/list')->with('msg_s', 'product inserted successfully.');

    }
    public function subcategories($id)
    {
        $subcategories=DB::table('subcategories')->where('categories_id',$id)->get()->all();
        echo json_encode($subcategories);

    }
   
    public function product_data()
    {
        $data = DB::table('products')->where('vedor_id',auth()->user()->id)->get();
        // print_r($data);
        // exit();
        return datatables($data)
           
          ->addColumn('action', function ($row) {
                       
                    $delete_action = url(vendor()."product/delete");

                    return ' <a href="'.url(vendor().'product/edit').'/'.$row->id.'" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a href="'.url(vendor().'product/view').'/'.$row->id.'" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                          <a onClick="confirmDelete(\''.$row->id.'\',\'Product\',\''.$delete_action.'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';
                                
                })
                ->addColumn('image', function ($row) {
                      // $delete_action = url(Config::get('constant.ad_banner_dir'));
                      return url($row->image);
                            
                    })
            ->make();
    }
    public function view($id)
    {
      $data['titel'] = 'Product view';
        $data['products'] = Products::where('id', $id)
            ->get()
            ->first();
        $data['productsImages'] = ProductsImages::where('product_id', $id)
            ->get()
            ->all();
        return view('vendor.product.product_view')->with($data);
    }
    public function delete()
    {
        $Products = Products::where('id', request()->id)
            ->get()
            ->first();
        @unlink($Products->image);
        Products::where('id', request()->id)->delete();
        $ProductsImages = ProductsImages::where('product_id', request()->id)->get();
        foreach ($ProductsImages as $key => $value) {
            @unlink($value->image);
            ProductsImages::where('id', $value->id)->delete();
        }
        return redirect(vendor() . 'product/list')->with('msg_s', 'product delete successfully.');
    }
     public function edit($id = '')
    {
        $data['titel'] = 'Product ';
        $data['products'] = Products::where('id', $id)
            ->get()
            ->first();
        $data['productsImages'] = ProductsImages::where('product_id', $id)
            ->get()
            ->all();
        $data['categories'] = Category::get()->all();

        return view('vendor.product.product_edit')->with($data);
    }
    public function update()
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'categories' => 'required',
            'subcategories' => 'required',
            'short_dicaripsan' => 'required',
            'price' => 'required|lte:discount',
            'dicaripsan' => 'required',
            'discount' => 'required',
        ]);
        $img_name = request()->old_image;
        if (request()->image) {
            $file = request()->file('image');

            $imagename = time() . rand(1, 100) . '.' . $file->extension();
            $banner_url = 'upload/product/';
            $file->move($banner_url, $imagename);
            $img_name = $banner_url . $imagename;
        }
        $product = Products::where('id', request()->id)->update([
            // 'model_number' => $model_number,
            'name' => request()->name,
            'categories_id' => request()->categories,
            'subcategories_id' => request()->subcategories,
            'shot_description' => request()->short_dicaripsan,
            'description' => request()->dicaripsan,
            'image' => $img_name,
            'price' => request()->price,
            'discount' => request()->discount,
        ]);

        return redirect(vendor() . 'product/list')->with('msg_s', 'product update successfully.');
    }
    public function img_delete()
    {
        foreach (request()->delete as $value) {
            $data = ProductsImages::where('id', $value)
                ->get()
                ->first();
            $product_id = $data->product_id;
            // print_r($product_id);
            // exit();
            @unlink($data->image);
            ProductsImages::where('id', $data->id)->delete();
        }
        return redirect(url(vendor() . 'product/edit', $product_id))->with('msg_s', 'image delete successfully.');
    }
    public function img_add()
    {
        $id = request()->id;
        foreach (request()->all_img as $file) {
            $imagename = time() . rand(1, 100) . '.' . $file->extension();
            $banner_url = 'upload/product/';
            $file->move($banner_url, $imagename);
            $img_name = $banner_url . $imagename;
            ProductsImages::create(['product_id' => $id, 'image' => $banner_url . $imagename]);
        }
        return redirect(url(vendor() . 'product/edit', $id))->with('msg_s', 'image add successfully.');
    }
}
