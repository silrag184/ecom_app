<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    private static $courier, $image, $imageUrl, $directory, $imageName, $extension;


    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/courier-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
    }

    public static function newCourier($request){

        if ($request->file('image'))
        {
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }

        self::$courier = new Courier();
        self::$courier->name            = $request->name;
        self::$courier->email           = $request->email;
        self::$courier->mobile          = $request->mobile;
        self::$courier->cost            = $request->cost;
        self::$courier->image           = self::$imageUrl;
        self::$courier->save();
    }

    public static function updateCourier($request, $id){
        self::$courier = Courier::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$courier->image))
            {
                unlink(self::$courier->image);
            }

            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$courier->image;
        }

        self::saveBasicInfo(self::$courier, $request, self::$imageUrl);
    }

    public static function saveBasicInfo($courier, $request, $imageUrl){
        $courier->name            = $request->name;
        $courier->email           = $request->email;
        $courier->mobile          = $request->mobile;
        $courier->cost            = $request->cost;
        $courier->image           = $imageUrl;
        $courier->save();
    }


    public static function checkStatus($id){
        self::$courier = Courier::find($id);
        if (self::$courier->status == 1){
            self::$courier->status = 0;
        }else{
            self::$courier->status = 1;

        }
        self::$courier->save();
    }

    public static function  deleteCourierInfo($id)
    {

        self::$courier = Courier::find($id);

        if (file_exists(self::$courier->image))
        {
            unlink(self::$courier->image);
        }
        self::$courier->delete();
    }
}
