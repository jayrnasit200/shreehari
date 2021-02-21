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

                return '<a href="' . url(admin() . 'product/update_status') .'/' .$row->id .'/' .
                    $row->status .'" class="btn btn-warning text-white"><i class="fa fa-exclamation-triangle"></i></a>

                 <a href="' .url(admin() . 'product/edit') .'/' .$row->id .'" class="btn btn-primary"><i class="far fa-edit"></i></a>

                    <a href="' .url(admin() . 'product/view/') .'/' . $row->id .'" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                    
                  <a onClick="confirmDelete(\'' . $row->id .'\',\'Product\',\'' .$delete_action . '\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>
                <a href="' .url(admin() . 'product/update_verify') .'/' .$row->id .'/' .$row->verify . '" class="btn btn-success text-white"><i class="fas fa-check-circle"></i></a>';
            })
            ->addColumn('image', function ($row) {
                // $delete_action = url(Config::get('constant.ad_banner_dir'));
                return url($row->image);
            })
            ->addColumn('name', function ($row) {
                // $delete_action = url(Config::get('constant.ad_banner_dir'));
                return substr($row->name, 0, 15) . '...';
            })
            //   ->addColumn('status', function ($row) {
            //         $status = 'href="' . url('/banners/status_update') . '/' . $row->id . '">Disable ';

            //     return $status;
            // })
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

        return view('admin.product.product_edit')->with($data);
    }
    public function update()
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'categories' => 'required',
            'subcategories' => 'required',
            'short_dicaripsan' => 'required',
            'price' => 'required',
            'dicaripsan' => 'required',
            'discount' => 'required|lte:price',
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

        return redirect(admin() . 'product')->with('msg_s', 'product update successfully.');
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
        return redirect(url(admin() . 'product/edit', $product_id))->with('msg_s', 'image delete successfully.');
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
        return redirect(url(admin() . 'product/edit', $id))->with('msg_s', 'image add successfully.');
    }
    public function update_status($id, $status)
    {
        if ($status == 'enable') {
            Products::where('id', $id)->update(['status' => 'disable']);
        } else {
            Products::where('id', $id)->update(['status' => 'enable']);
        }
        return redirect(admin() . 'product')->with('msg_s', 'product update successfully.');
    }
    public function update_verify($id, $status)
    {
        if ($status == 'No') {
            Products::where('id', $id)->update(['verify' => 'Yes']);
        } else {
            Products::where('id', $id)->update(['verify' => 'No']);
        }
        return redirect(admin() . 'product')->with('msg_s', 'product update successfully.');
    }
}
