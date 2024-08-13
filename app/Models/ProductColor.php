<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Livewire\Features\SupportTesting\update;

class ProductColor extends Model
{
    use HasFactory;

    private static $productColor, $productColors;

    public static function newProductColor($colors, $productID){
        foreach ($colors as $color){
            self::$productColor = new ProductColor();
            self::$productColor->product_id = $productID;
            self::$productColor->color_id = $color;
            self::$productColor->save();
        }
    }

    public static function updateProductColor($colors, $productID ){

        self::$productColors = ProductColor::where('product_id',$productID)->get();

        foreach (self::$productColors as self::$productColor){
             self::$productColor->delete();
        }
        ProductColor::newProductColor($colors, $productID);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }
}
