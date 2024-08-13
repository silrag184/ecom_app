<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    private static $productSize, $productSizes;

    public static function newProductSize($sizes, $productID){
        foreach ($sizes as $size){
            self::$productSize = new ProductSize();
            self::$productSize->product_id = $productID;
            self::$productSize->size_id = $size;
            self::$productSize->save();
        }
    }

    public static function updateProductSize($sizes, $productID ){

        self::$productSizes = ProductSize::where('product_id',$productID)->get();

        foreach (self::$productSizes as self::$productSize){
            self::$productSize->delete();
        }
        ProductSize::newProductSize($sizes, $productID);
    }

    public function size(){
        return $this->belongsTo(Size::class);
    }
}
