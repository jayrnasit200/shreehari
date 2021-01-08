<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductsImages;
use App\Models\Category;
use DB;

class ProductsController extends Controller
{
    public function index()
    {
        $data['titel'] = 'Product List';
        return view('admin.product.product_list')->with($data);
    }
    public function all_product()
    {
        $data = Products::get()->all();
        // print_r($data);
        // exit();
        return datatables($data)
            ->addColumn('action', function ($row) {
                $delete_action = url(admin() . "product/delete");
                if ($row->status == 'Enable') {
                    $status = '<a href="' . url('/banners/status_update') . '/' . $row->id . '" class="btn btn-sm btn-warning">Disable </a>';
                } else {
                    $status = '<a href="' . url('/banners/status_update') . '/' . $row->id . '" class="btn btn-sm btn-success">Enable </a>';
                }

                return ' <a href="'.url(admin().'product/edit') .'/' .$row->id . '" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a href="' .url(admin() . 'product/view/') .'/' .$row->id .'" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                          <a onClick="confirmDelete(\'' .$row->id .'\',\'Product\',\'' .$delete_action .'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';
            })
            ->addColumn('image', function ($row) {
                // $delete_action = url(Config::get('constant.ad_banner_dir'));
                return url($row->image);
            })
            ->make();
    }
    public function create()
    {
        $data['titel'] = 'Product ';
        $data['categories'] = Category::get()->all();
        return view('admin.product.product_create')->with($data);
    }
    public function subcategories($id)
    {
        $subcategories = DB::table('subcategories')
            ->where('categories_id', $id)
            ->get()
            ->all();
        echo json_encode($subcategories);
    }
    public function add()
    {
        $model_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);

        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'categories' => 'required',
            'subcategories' => 'required',
            // 'type' => 'required',
            // 'sub_types' => 'required',
            'short_dicaripsan' => 'required',
            'price' => 'required',
            'dicaripsan' => 'required',
            'discount' => 'required|lte:price',
        ]);
        $this->validate(request(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $file = request()->file('image');

        $imagename = time() . rand(1, 100) . '.' . $file->extension();
        $banner_url = 'upload/product/';
        $file->move($banner_url, $imagename);
        $product = Products::create([
            'model_number' => $model_number,
            'name' => request()->name,
            'categories_id' => request()->categories,
            'subcategories_id' => request()->subcategories,
            'shot_description' => request()->short_dicaripsan,
            'description' => request()->dicaripsan,
            'image' => $banner_url . $imagename,
            'price' => request()->price,
            'discount' => request()->discount,
            // 'type_id' => request()->type,
            // 'sub_types' => request()->sub_types,
            'status' => 'enable',
            // 'vedor_id' => auth()->user()->id,
            'vedor_id' => '0',
            'verify' => 'No',
        ]);
        if (request()->file('all_img')) {
            foreach (request()->file('all_img') as $file) {
                $imagename = time() . rand(1, 100) . '.' . $file->extension();
                $banner_url = 'upload/product/';
                $file->move($banner_url, $imagename);
                ProductsImages::create([
                    'product_id' => $product->id,
                    'image' => $banner_url . $imagename,
                ]);
            }
        }
        return redirect(admin() . 'product')->with('msg_s', 'product inserted successfully.');
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
        return redirect(admin() . 'product')->with('msg_s', 'product delete successfully.');
    }
    public function view($id = '')
    {
        $data['titel'] = 'Product view';
        $data['products'] = Products::where('id', $id)
            ->get()
            ->first();
        $data['productsImages'] = ProductsImages::where('product_id', $id)
            ->get()
            ->all();
        return view('admin.product.product_view')->with($data);
    }
    public function edit($id='')
    {
      $data['titel'] = 'Product ';
        $data['products'] = Products::where('id', $id)
            ->get()
            ->first();
        $data['productsImages'] = ProductsImages::where('product_id', $id)
            ->get()
            ->all();
        $data['categories'] = Category::get()->all();
            
        return view('admin.product.product_edit')->with($data);
    }
}
