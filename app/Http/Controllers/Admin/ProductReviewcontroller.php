<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modele\ProductReview;
use App\Modele\ProductReviewImage;

class ProductReviewcontroller extends Controller
{
    public function index()
    {
    	$data['titel']='Review';
        // return view('admin.review.review_list')->with($data);
    }
}
