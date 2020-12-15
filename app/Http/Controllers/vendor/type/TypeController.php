<?php

namespace App\Http\Controllers\vendor\type;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TypeController extends Controller
{
	public function index()
	{
		$data['type']=DB::table('product_types')->where('user_id',auth()->user()->id)->get();
		$data['titel']='Type List';
		// print_r($data['type']);
		// exit();
        return view('vendor.type.type_list')->with($data);
	}
    public function create()
    {
    	$data['titel']='Type';
        return view('vendor.type.type_create')->with($data);
    }
    public function add()
    {
    	$this->validate(request(), [
            'name' => 'required',
        ]);
       // print_r(auth()->user()->id);
       // exit();
        DB::table('product_types')->insert(['name' => request()->name,'user_id' => auth()->user()->id]);

         return redirect('/product/type/list')->with('msg_s', 'Menu inserted successfully.');
    }
    public function delete($id)
    {
    	DB::table('product_types')->where('id', $id)->delete();
         return redirect('/product/type/list')->with('msg_e', 'Menu Delete successfully.');

    }
    public function edit($id)
    {

        $data['get']=DB::table('product_types')->where('id', $id)->get()->first();
        $data['titel']='Type';
        return view('vendor.type.type_edit')->with($data);
    }
    public function update()
    {

        $id=request()->id;
        $this->validate(request(), [
            'name' => 'required',
        ]);
       // print_r(auth()->user()->id);
       // exit();
        DB::table('product_types')->where('id', $id)->update(['name' => request()->name,'user_id' => auth()->user()->id]);
         return redirect('/product/type/list')->with('msg_s', 'Menu inserted successfully.');
    }
}
