<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingArea extends Model
{
    use HasFactory;

    private static $shippingArea;

    public static function saveShipping($request){
        self::$shippingArea = new ShippingArea();
        self::saveBasicInfo(self::$shippingArea, $request);
    }

    public static function updateShipping($request, $id){
        self::$shippingArea = ShippingArea::find($id);
        self::saveBasicInfo(self::$shippingArea, $request);
    }

    public static function saveBasicInfo($shippingArea, $request){
        $shippingArea->name = $request->name;
        $shippingArea->description = $request->description;
        $shippingArea->price = $request->price;
        $shippingArea->save();
    }

    public static function deleteShipping($id){
        self::$shippingArea = ShippingArea::find($id);
        self::$shippingArea->delete();
    }

    public static function checkStatus($id){
        self::$shippingArea = ShippingArea::find($id);
        if (self::$shippingArea->status == 1){
            self::$shippingArea->status = 0;
        }else{
            self::$shippingArea->status = 1;

        }
        self::$shippingArea->save();
    }
}
