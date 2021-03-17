<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrdersProduct;
use DB;

class OrderController extends Controller
{
    public function index()
    {
    	OrdersProduct::where('vendor_id',user_data()->id)->update(['vendor_notification'=>'success']);
    	$data['titel']='Orders';
        return view('vendor.order.order_list')->with($data);
    }
     public function order_data()
    {
        $data = DB::table('orders_products')->where('vendor_id',auth()->user()->id)
        ->join('products', 'orders_products.products_id', '=', 'products.id')
        ->select('orders_products.id','products_id','model_number','name','image','qty','status','packing')->get();
        // print_r($data);
        // exit();
        return datatables($data)
           
          ->addColumn('action', function ($row) {
                       
                    $delete_action = url(vendor()."product/delete");

                    $action = '  <a href="'.url(vendor().'product/view').'/'.$row->products_id.'" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                    <a href="'.url(vendor().'product/view').'/'.$row->id.'" class="btn btn-primary"><i class="fas fa-print"></i></a>';
                          
                      if ($row->packing == 'padding') {
                      	$action = '<a href="'.url(vendor().'order_status_update').'/'.$row->id.'" class="btn btn-success"><i class="far fa-thumbs-up"></i></a>
                      		<a href="'.url(vendor().'product/view').'/'.$row->id.'" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                      		<a href="'.url(vendor().'product/view').'/'.$row->id.'" class="btn btn-primary"><i class="fas fa-print"></i></a>';
                      	}
                    return  $action;
                })
                ->addColumn('image', function ($row) {
                      return url($row->image);
                            
                    })
            ->make();
    }
    public function order_status_update($id)
    {
    	OrdersProduct::where('id',$id)->update(['packing'=>'success']);
        return redirect(vendor() .'order')->with('msg_s', 'Order Update successfully.');

    }
}
