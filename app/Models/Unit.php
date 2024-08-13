<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    private static $unit;

    public static function saveUnit($request){
        self::$unit = new Unit();
        self::saveBasicInfo(self::$unit, $request);
    }

    public static function updateUnit($request, $id){
        self::$unit = Unit::find($id);
        self::saveBasicInfo(self::$unit, $request);
    }

    public static function saveBasicInfo($unit, $request){
        $unit->name = $request->name;
        $unit->code = $request->code;
        $unit->description = $request->description;
        $unit->save();
    }

    public static function deleteUnit($id){
        self::$unit = Unit::find($id);
        self::$unit->delete();
    }

    public static function checkStatus($id){
        self::$unit = Unit::find($id);
        if (self::$unit->status == 1){
            self::$unit->status = 0;
        }else{
            self::$unit->status = 1;

        }
        self::$unit->save();
    }
}
