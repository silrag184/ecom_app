<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    private static $size;

    public static function newSize($request)
    {
        self::$size = new Size();
        self::$size->name           = $request->name;
        self::$size->description    = $request->description;
        self::$size->save();
    }

    public static function  updateSize($request, $id)
    {

        self::$size = Size::find($id);


        self::saveBasicInfo(self::$size, $request);
    }

    public static function  deleteSize($id)
    {

        self::$size = Size::find($id);
        self::$size->delete();
    }

    private static function saveBasicInfo($size, $request){
        $size->name = $request->name;
        $size->description = $request->description;
        $size->save();

    }

    public static function checkStatus($id){
        self::$size = Size::find($id);
        if (self::$size->status == 1){
            self::$size->status = 0;
        }else{
            self::$size->status = 1;

        }
        self::$size->save();
    }


}
