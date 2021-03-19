<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    public function index()
    {
    	$data['titel']='Users List';
        return view('admin.users.users_list')->with($data);
    }
    public function users_data()
    {
        $data = DB::table('users')->where('role','3')->get();
        // print_r($data);
        // exit();
        return datatables($data)
           
          ->addColumn('action', function ($row) {
                       
                    $delete_action = url(admin()."users/delete");

                    $action = '<a onClick="confirmDelete(\'' . $row->id .'\',\'User\',\'' .$delete_action . '\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';
                    return  $action;
                })
                // ->addColumn('image', function ($row) {
                //       return url($row->image);
                            
                //     })
            ->make();
    }
    public function delete()
    {
    	
    	DB::table('users')->where('id',request()->id)->delete();
        return redirect(admin() . 'users')->with('msg_s', 'User delete successfully.');

    }
}
