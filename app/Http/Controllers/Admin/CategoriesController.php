<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
		$data['titel']='Categories List';
        return view('admin.categories.categories_list')->with($data);
    }
    public function categories_data()
    {
    	 $data = Category::get()->all();

        return datatables($data)
           
          ->addColumn('action', function ($row) {
                   	$delete_action=url(admin()."categories_delete");
                    return' <a href="'.url(admin().'categories/edit').'/'.$row->id.'" class="btn btn-primary"><i class="far fa-edit"></i></a>
                  		<a href="'.url(admin().'categories/subcategories').'/'.$row->id.'" class="btn btn-dark"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                          <a onClick="confirmDelete(\''.$row->id.'\',\'categorie\',\''.$delete_action.'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';

                   // return' <a href="'.url('/banners/edit').'/'.$row->id.'" class="btn btn-primary"><i class="far fa-edit"></i></a>
                   //  <a href="'.url('/banners/edit').'/'.$row->id.'" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                   //        <a onClick="confirmDelete(\''.$row->id.'\',\'Banners\',\''.$delete_action.'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';
                                
                })
                // ->addColumn('image', function ($row) {
                //       // $delete_action = url(Config::get('constant.ad_banner_dir'));
                //       return url($row->image);
                            
                //     })
            ->make();
    }
    public function categories_delete()
    {
    	$id=request()->id;
    	Category::where('id',$id)->delete();
       return redirect(admin().'categories')->with('msg_s', 'Categories Delet Successfully.');

    }
    public function create()
    {
    	$data['titel']='Categories ';
        return view('admin.categories.categories_create')->with($data);
    }
    public function add()
    {
    	$this->validate(request(), [
            "name" => "required|unique:categories",
        ]);

        Category::create([
   			'name' => request()->name,
   			]);
       return redirect(admin().'categories')->with('msg_s', 'Categories Create Successfully.');

    }
     public function edit($id)
    {
    	$data['data']=Category::where('id',$id)->get()->first();
    	$data['titel']='Categories ';
        return view('admin.categories.categories_edit')->with($data);
    }
    public function update()
    {
    	$id=request()->id;
    	$this->validate(request(), [
            "name" => "required|unique:categories,name,".$id,
        ]);

        Category::where('id',$id)->update([
   			'name' => request()->name,
   			]);
       return redirect(admin().'categories')->with('msg_s', 'Categories Update Successfully.');
    }

}
