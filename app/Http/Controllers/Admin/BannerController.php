<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
    	$data['titel']='Banner List';
        return view('admin.Banner.list')->with($data);
    }
    public function banners_data()
    {
    	$data = Banner::get()->all();
    	// print_r($data);
    	// exit();
        return datatables($data)
           
          ->addColumn('action', function ($row) {
                   	$delete_action=url(admin()."banners/delete");
                    return' <a href="'.url(admin().'banners/edit').'/'.$row->id.'" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a onClick="confirmDelete(\''.$row->id.'\',\''.$row->status.'\',\''.$delete_action.'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';

                   // return' <a href="'.url('/banners/edit').'/'.$row->id.'" class="btn btn-primary"><i class="far fa-edit"></i></a>
                   //  <a href="'.url('/banners/edit').'/'.$row->id.'" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                   //        <a onClick="confirmDelete(\''.$row->id.'\',\'Banners\',\''.$delete_action.'\')" class="btn text-white btn-danger"><i class="far fa-trash-alt"></i></a>';
                                
                })
                ->addColumn('image', function ($row) {
                      // $delete_action = url(Config::get('constant.ad_banner_dir'));
                      return url($row->image);
                            
                    })
            ->make();
    }
    public function create()
    {
    	$data['titel']='Banner Create';
        return view('admin.Banner.create')->with($data);
    }
    public function add()
    {
    	// print_r(Request()->all());
    	$this->validate(request(), [
            "type" => "required",
        ]);
        if (request()->type == 'banner') {
        	$this->validate(request(), [
	            "image" => "required|mimes:jpeg,jpg,png|dimensions:width=1180,height=620",
	        ],
	        [   
	            'image.required'    => 'The image field is required.',
	            'image.dimensions' => 'Banner image size required 1180X620.',
	        ]);
        }else{
        	$this->validate(request(), [
	            "image" => "required",
	        ]);
        }
        $file = request()->file('image');
        $imagename = time() . rand(1, 100) . '.' . $file->extension();
        $banner_url = 'upload/Banners_LOGOS/';
        $file->move($banner_url, $imagename);
        Banner::create([
   			'image' => $banner_url. $imagename,
   			'status' => request()->type,
   			]);
       return redirect(admin().'banners')->with('msg_s', 'banners Create Successfully.');
    }
    public function delete()
    {
    	 $Banner = Banner::where('id', request()->id)
            ->get()
            ->first();
        @unlink($Banner->image);
        Banner::where('id', request()->id)->delete();
       return redirect(admin().'banners')->with('msg_s', 'Banners Delete Successfully.');
    }
    public function edit($id)
    {
    	$data['titel']='Banner Create';
    	$data['data']= Banner::where('id', request()->id)->get()->first();
        return view('admin.Banner.edit')->with($data);
    }
     public function update()
    {
    	$this->validate(request(), [
            "type" => "required",
        ]);
        $imgname=request()->old_img;
        if (request()->image) {
	        if (request()->type == 'banner') {
	        	$this->validate(request(), [
		            "image" => "required|mimes:jpeg,jpg,png|dimensions:width=1180,height=620",
		        ],
		        [   
		            'image.required'    => 'The image field is required.',
		            'image.dimensions' => 'Banner image size required 1180X620.',
		        ]);
	        }else{
	        	$this->validate(request(), [
		            "image" => "required",
		        ]);
	        }
	        $file = request()->file('image');
	        $imagename = time() . rand(1, 100) . '.' . $file->extension();
	        $banner_url = 'upload/Banners_LOGOS/';
	        $file->move($banner_url, $imagename);
	        $imgname=$banner_url. $imagename;
	    	 @unlink(request()->old_img);
	    }
        Banner::where('id',request()->id)->update([
   			'image' => $imgname,
   			'status' => request()->type,
   			]);
       return redirect(admin().'banners')->with('msg_s', 'banners Create Successfully.');
    }
}
