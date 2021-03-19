<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class VendorsController extends Controller
{
    public function index()
    {
    	$data['titel']='vendors List';
        return view('admin.vendors.vendors_list')->with($data);
    }
    public function vendors_data()
    {
        $data = DB::table('users')->where('role','2')->get();
        // print_r($data);
        // exit();
        return datatables($data)
           
          ->addColumn('action', function ($row) {
                       
                    $delete_action = url(admin()."vendors/delete");

                    $action = '<a onClick="confirmDelete(\'' . $row->id .'\',\'Vendor\',\'' .$delete_action . '\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';
                    return  $action;
                })
                // ->addColumn('image', function ($row) {
                //       return url($row->image);
                            
                //     })
            ->make();
    }
    public function delete()
    {
    	$product=DB::table('products')->where('vedor_id',request()->id)->get();
    	if (isset($product)) {
    		foreach ($product as $key => $val) {
    			    $Products = Products::where('id', $val->id)
		            ->get()
		            ->first();
		        @unlink($Products->image);
		        Products::where('id', $val->id)->delete();
		        $ProductsImages = ProductsImages::where('product_id', $val->id)->get();
		        foreach ($ProductsImages as $key => $value) {
		            @unlink($value->image);
		            ProductsImages::where('id', $value->id)->delete();
		        }
    		}
    	}
    	DB::table('users')->where('id',request()->id)->delete();

        return redirect(admin() . 'vendors')->with('msg_s', 'Vendor delete successfully.');
    }
}
