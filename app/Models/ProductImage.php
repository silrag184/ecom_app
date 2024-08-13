<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    private static $productImage, $productImages, $image, $imageUrl, $directory, $imageName, $extension;

    public static function newProductImage($images, $productId)
    {
        foreach ($images as $image)
        {
            self::$extension    = $image->getClientOriginalExtension();
            self::$imageName    = rand(10000, 500000).'.'.self::$extension;
            self::$directory    = 'upload/product-other-images/';
            $image->move(self::$directory, self::$imageName);
            self::$imageUrl     = self::$directory.self::$imageName;

            self::$productImage = new ProductImage();
            self::$productImage->product_id     = $productId;
            self::$productImage->other_images          = self::$imageUrl;
            self::$productImage->save();
        }
    }

    public static function updateProductImage($images, $productID ){

        self::$productImages = ProductImage::where('product_id',$productID)->get();

        if ($images != null){
            foreach (self::$productImages as self::$productImage){
                if (file_exists(self::$productImage)){
                    unlink(self::$productImage);
                }
                self::$productImage->delete();
            }
            ProductImage::newProductImage($images, $productID);
        }
    }


//    public static function updateProductImage($images, $productId)
//    {
//
//        foreach ($images as $image)
//        {
//            self::$extension    = $image->getClientOriginalExtension();
//            self::$imageName    = rand(10000, 500000).'.'.self::$extension;
//            self::$directory    = 'upload/product-other-images/';
//            $image->move(self::$directory, self::$imageName);
//            self::$imageUrl     = self::$directory.self::$imageName;
//
//            self::$productImage = ProductImage::find($productId);
//            self::$productImage->product_id         = $productId;
//            self::$productImage->other_images       = self::$imageUrl;
//            self::$productImage->save();
//        }
//    }

    public function image(){
        return $this->belongsTo(ProductImage::class);
    }
}
