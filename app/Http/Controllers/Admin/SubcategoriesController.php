<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;

class SubcategoriesController extends Controller
{
    public function index($id='')
    {
    	if (empty($id)) {
    		$id='0';
    	}
    	$data['titel']='Subcategories List';
    	$data['id']=$id;
        return view('admin.subcategories.subcategories_list')->with($data);
    }
    public function Subcategory_data($id='')
    {
    	if (!empty($id)) {
    		$data=Subcategory::where('categories_id',$id)->get()->all();
    	}else{
    		$data=Subcategory::get()->all();
    	}
    	 return datatables($data)
          ->addColumn('action', function ($row) {
                   	$delete_action=url(admin()."categories/subcategories/delete");
                    if ($row->Show_home  == 'yes') {
                        return' <a href="'.url(admin().'categories/subcategories/edit').'/'.$row->id.'" class="btn btn-primary"><i class="far fa-edit"></i></a>
                          <a onClick="confirmDelete(\''.$row->id.'\',\'subcategories\',\''.$delete_action.'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>
                          <a href="'.url(admin().'categories/subcategories/show_hme').'/'.$row->id.'/'.$row->Show_home.'" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>';
                    }else{
                        return' <a href="'.url(admin().'categories/subcategories/edit').'/'.$row->id.'" class="btn btn-primary"><i class="far fa-edit"></i></a>
                          <a onClick="confirmDelete(\''.$row->id.'\',\'subcategories\',\''.$delete_action.'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>
                          <a href="'.url(admin().'categories/subcategories/show_hme').'/'.$row->id.'/'.$row->Show_home.'" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></a>';
                        }
                  
                                
                })
                // ->addColumn('image', function ($row) {
                //       // $delete_action = url(Config::get('constant.ad_banner_dir'));
                //       return url($row->image);
                            
                //     })
            ->make();
    }
     public function create($id='')
    {
    	$data['category']=Category::where('id',$id)->get()->first() ;
    	$data['titel']='Subcategories';
        return view('admin.subcategories.subcategories_create')->with($data);
    }
    public function add()
    {
    	$categories_id=request()->categories_id;
    	$this->validate(request(), [
            "name" => "required",
        ]);

        Subcategory::create([
   			'name' => request()->name,
   			'categories_id' => $categories_id,
   			]);
       return redirect(url(admin().'categories/subcategories',$categories_id))->with('msg_s', 'Subcategories Create Successfully.');
    }
    public function delete()
    {
    	$id=request()->id;
    	$Subcategory=Subcategory::where('id',$id)->get('categories_id')->first();
    	$categories_id=$Subcategory->categories_id;
    	
    	Subcategory::where('id',$id)->delete();
       return redirect(url(admin().'categories/subcategories',$categories_id))->with('msg_s', 'Subcategories Create Successfully.');

    }
    public function edit($id)
    {
    	$data['subcategory']=Subcategory::where('id',$id)->get()->first() ;
    	$data['category']=Category::where('id',$data['subcategory']->categories_id)->get()->first() ;
    	$data['titel']='Subcategories';
        return view('admin.subcategories.subcategories_edit')->with($data);
    }
    public function update()
    {
    	$id=request()->id;
    	$categories_id=request()->categories_id;
    	$this->validate(request(), [
            "name" => "required",
        ]);

        Subcategory::where('id',$id)->update([
   			'name' => request()->name,
   			]);
       return redirect(url(admin().'categories/subcategories',$categories_id))->with('msg_s', 'Subcategories update Successfully.');
    }
    public function show_hme($id,$status)
    {
        if ($status == 'yes') {
            $data='no';
        }else{
            $data='yes';
        }
        Subcategory::where('id',$id)->update([
            'Show_home' => $data,
            ]);
        return redirect(url()->previous())->with('msg_s', 'Subcategories update Successfully.');
    }
}
