<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product, $image, $imageUrl, $directory, $imageName, $extension, $images, $colors, $color, $sizes, $size;

    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/product-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProduct($request)
    {
        if ($request->file('image'))
        {
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }
        self::$product = new Product();

        return self::saveBasicInfo(self::$product, $request, self::$imageUrl);

    }

    public static function  updateProduct($request, $id)
    {

        self::$product = Product::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }

            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$product->image;
        }


        return self::saveBasicInfo(self::$product, $request, self::$imageUrl);
    }

    public static function  deleteProduct($id)
    {

        self::$product = Product::find($id);

        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }


        //for multiple Image delete (start)
        self::$images = ProductImage::where('product_id', self::$product->id)->get();
        foreach (self::$images as self::$image){
            if (file_exists(self::$image)){
                unlink(self::$image);
            }
            self::$image->delete();
        }
        self::$colors = ProductColor::where('product_id', self::$product->id)->get();
        foreach (self::$colors as self::$color){
            self::$color->delete();
        }

        self::$sizes = ProductSize::where('product_id', self::$product->id)->get();
        foreach (self::$sizes as self::$size){
            self::$size->delete();
        }
        //for multiple Image delete (end)

        self::$product->delete();
    }

    private static function saveBasicInfo($product, $request, $imageUrl){
        $product->category_id           = $request->category_id;
        $product->sub_category_id       = $request->sub_category_id;
        $product->brand_id              = $request->brand_id;
        $product->unit_id               = $request->unit_id;
        $product->name                  = $request->name;
        $product->code                  = $request->code;
        $product->short_description     = $request->short_description;
        $product->long_description      = $request->long_description;
        $product->image                 = $imageUrl;
        $product->meta_title            = $request->meta_title;
        $product->meta_description      = $request->meta_description;
        $product->video_link            = $request->video_link;
        $product->regular_price         = $request->regular_price;
        if ($request->selling_price){
            $product->selling_price         = $request->selling_price;
            $product->discount_type         = $request->discount_type;
            $product->discount_amount       = $request->discount_amount;
        }

        $product->stock_amount          = $request->stock_amount;
        $product->save();
        return $product;

    }

    public static function checkStatus($id){
        self::$product = Product::find($id);
        if (self::$product->status == 1){
            self::$product->status = 0;
        }else{
            self::$product->status = 1;

        }
        self::$product->save();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subCategory(){
        return $this->belongsTo(SubCategory::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function colors(){
        return $this->hasMany(ProductColor::class);
    }
    public function sizes(){
        return $this->hasMany(ProductSize::class);
    }
    public function images(){
        return $this->hasMany(ProductImage::class);
    }
}
