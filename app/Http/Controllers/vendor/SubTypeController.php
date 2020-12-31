<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SubTypeController extends Controller
{
   public function index($id)
   {
   		$data['subtype']=DB::table('product_sub_types')->where('type_id',$id)->get();
		$data['id']=$id;
		$data['titel']='Sub Type List';
		// print_r($id);
		// print_r($data['subtype']);
		// exit();
        return view('vendor.subtype.sub_type_list')->with($data);
   }
   public function create($id)
   {
   		$data['titel']='Sub Type';
   		$data['id']=$id;
        return view('vendor.subtype.sub_type_create')->with($data);
   }
   public function add()
   {
   	$type_id=request()->type_id;
   	// print_r(request()->all());
   	// exit();
   	$this->validate(request(), [
            "name" => "required",
            "color" => "required_if:coler_type,==,on",
            "size" => "required_if:size_available,==,on",
            'size_type' => "required_if:size_available,==,on",
        ]);
   		if(request()->coler_type == "on"){
   			$color=request()->color;
   		}else{
   			$color=null;
   		}
   		DB::table('product_sub_types')->insert([
   			'user_id'=>auth()->user()->id,
   			'type_id' => $type_id,
   			'color' => $color,
            'size' => request()->size,
   			'name' => request()->name,
   			'size_type' => request()->size_type,
   			]);

         return redirect(url('product/type/sub_type',$type_id))->with('msg_s', 'Menu inserted successfully.');
   }
   public function delete($id)
   {
   		// print_r($id);
   		$data=DB::table('product_sub_types')->where('id', $id)->get()->first();
   		$ids=$data->type_id;
   		
   		DB::table('product_sub_types')->where('id', $id)->delete();
         return redirect(url('product/type/sub_type',$ids))->with('msg_e', 'Sub type Delete successfully.');
   }
    public function edit($id)
   {
   		$data['get_data']=DB::table('product_sub_types')->where('id', $id)->get()->first();
   		$data['titel']='Sub Type';
   		$data['id']=$id;
        return view('vendor.subtype.sub_type_edit')->with($data);
   }
   public function update()
   {
   	// print_r(request()->color);
   	// exit();
   			$this->validate(request(), [
            "color" => "required_if:coler_type,==,on",
            "size" => "required_if:size_available,==,on",
            'size_type' => "required_if:size_available,==,on",
        ]);
   		if(request()->coler_type == "on"){
   			$color=request()->color;
   		}else{
   			$color=null;
   		}
   		$type_id=request()->type_id;
   		DB::table('product_sub_types')->where('id',request()->id)->update([
   			'user_id'=>auth()->user()->id,
   			'type_id' => $type_id,
   			'color' => $color,
   			'size' => request()->size,
   			'size_type' => request()->size_type,
   			]);

         return redirect(url('product/type/sub_type',$type_id))->with('msg_s', 'Menu inserted successfully.');
   }
}
