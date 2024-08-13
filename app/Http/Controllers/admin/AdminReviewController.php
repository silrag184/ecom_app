<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function review(){
        return view('admin.product.review.index',[
            'reviews' => ProductReview::latest()->get()
        ]);
    }

    public function reviewStatus($id){
        ProductReview::statusUpdate($id);
        return back()->with('message','Review status update successfully.');
    }


    public function deleteReview($id){
        ProductReview::deleteReview($id);
        return back()->with('message','Review Delete successfully.');
    }

}
