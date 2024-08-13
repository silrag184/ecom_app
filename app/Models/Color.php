<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    private static $color;

    public static function newColor($request)
    {


        self::$color = new Color();
        self::$color->name           = $request->name;
        self::$color->code    = $request->code;
        self::$color->save();
    }

    public static function  updateColor($request, $id)
    {

        self::$color = Color::find($id);


        self::saveBasicInfo(self::$color, $request);
    }

    public static function  deleteColor($id)
    {

        self::$color = Color::find($id);
        self::$color->delete();
    }

    private static function saveBasicInfo($color, $request){
        $color->name           = $request->name;
        $color->code    = $request->code;
        $color->save();

    }

    public static function checkStatus($id){
        self::$color = Color::find($id);
        if (self::$color->status == 1){
            self::$color->status = 0;
        }else{
            self::$color->status = 1;

        }
        self::$color->save();
    }

}
