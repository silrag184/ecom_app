<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingArea;
use App\Models\SubCategory;
use Cart;

class CategoryByProductController extends Controller
{
    private $category;

    public function index($id){
        $this->category =Category::find($id);
        return view('website.categoryByProduct.index',[
            'products'=>Product::where('category_id',$this->category->id)->get(),
            'ShippingAreas'=>ShippingArea::all(),
            'cartsProduct'=>Cart::content(),
            'categories'=>Category::where('status',1)->get(),
        ]);
    }
    public function subCategoryWiseProduct($id){
        $this->subcategory =SubCategory::find($id);
        return view('website.categoryByProduct.subcategory-wise-product',[
            'products'=>Product::where('sub_category_id',$this->subcategory->id)->get(),
            'ShippingAreas'=>ShippingArea::all(),
            'cartsProduct'=>Cart::content(),
            'subcategories'=>SubCategory::where('status',1)->get(),
        ]);
    }
}
