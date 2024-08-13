<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private static $subCategories;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index',[
           'products' => Product::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add',[
            'categories' => Category::where('status', 1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get(),
            'colors' => Color::where('status', 1)->get(),
            'sizes' => Size::where('status', 1)->get(),
            'units' => Unit::where('status', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    private $product;
    public function store(Request $request)
    {
        $this->product = Product:: newProduct($request);
        ProductColor::newProductColor($request->color, $this->product->id);
        ProductSize::newProductSize($request->size, $this->product->id);
        ProductImage::newProductImage($request->other_image, $this->product->id);
        return back()->with('message','Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.product.details',[
            'product'=>Product::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',[
            'product'=>$product,
            'productColors' => ProductColor::where('product_id',$product->id)->get(),
            'productSizes' => ProductSize::where('product_id',$product->id)->get(),
            'productImages' => ProductImage::where('product_id',$product->id)->get(),
            'categories' => Category::where('status', 1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get(),
            'colors' => Color::where('status', 1)->get(),
            'sizes' => Size::where('status', 1)->get(),
            'units' => Unit::where('status', 1)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->product = Product:: updateProduct($request, $id);
        ProductColor::updateProductColor($request->color, $this->product->id);
        ProductSize::updateProductSize($request->size, $this->product->id);
        ProductImage::updateProductImage($request->other_image, $this->product->id);
        return back()->with('message','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::deleteProduct($id);
        return back()->with('message','Product Info Deleted Successfully');
    }

    public function getSubCategoryByCategory(){
        self::$subCategories = SubCategory::where('category_id',$_GET['id'])->get();
        return response()->json(self::$subCategories);
    }

    public function info($id){
        Product::checkStatus($id);
        return back()->with('message', 'Product Status Updated Successfully');
    }
}
