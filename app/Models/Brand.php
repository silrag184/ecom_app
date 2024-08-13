<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    private static $brand, $image, $imageUrl, $directory, $imageName, $extension;

    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/sub-category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newBrand($request)
    {
        if ($request->file('image'))
        {
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }

        self::$brand = new Brand();
        self::$brand->name           = $request->name;
        self::$brand->description    = $request->description;
        self::$brand->image          = self::$imageUrl;
        self::$brand->save();
    }

    public static function  updateBrand($request, $id)
    {

        self::$brand = Brand::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$brand->image))
            {
                unlink(self::$brand->image);
            }

            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$brand->image;

        }

        self::saveBasicInfo(self::$brand, $request, self::$imageUrl);
    }

    public static function  deleteBrand($id)
    {

        self::$brand = Brand::find($id);

        if (file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }

    private static function saveBasicInfo($brand, $request, $imageUrl){
        $brand->name           = $request->name;
        $brand->description    = $request->description;
        $brand->image          = $imageUrl;
        $brand->save();

    }



    public static function checkStatus($id){
        self::$brand = Brand::find($id);
        if (self::$brand->status == 1){
            self::$brand->status = 0;
        }else{
            self::$brand->status = 1;

        }
        self::$brand->save();
    }
}
