<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrdersProduct;
use DB;
class OrderController extends Controller
{
     public function index()
    {
    	$data['titel']='Orders';
        return view('admin.order.order_list')->with($data);
    }
     public function order_data()
    {
        $data = DB::table('orders_products')
        ->join('products', 'orders_products.products_id', '=', 'products.id')
        ->select('orders_products.id','products_id','model_number','products.name','image','qty','status','packing')->get();
        // print_r($data);
        // exit();
        return datatables($data)
           
          ->addColumn('action', function ($row) {
                       
                    $delete_action = url(admin()."product/delete");

                    $action = '  <a href="'.url(admin().'product/view').'/'.$row->products_id.'" class="btn btn-dark"><i class="fas fa-eye"></i></a>';
                          
                      if ($row->packing == 'padding') {
                      	$action = '<a href="'.url(admin().'order_status_update').'/'.$row->id.'" class="btn btn-success"><i class="far fa-thumbs-up"></i></a>
                      		';
                      	}
                    return  $action;
                })
                ->addColumn('image', function ($row) {
                      return url($row->image);
                            
                    })
            ->make();
    }
}
