<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    private static $subcategory, $image, $imageUrl, $directory, $imageName, $extension;

    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/sub-category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newSubCategory($request)
    {
        if ($request->file('image'))
        {
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }

        self::$subcategory = new SubCategory();
        self::$subcategory->category_id    = $request->category_id;
        self::$subcategory->name           = $request->name;
        self::$subcategory->description    = $request->description;
        self::$subcategory->image          = self::$imageUrl;
        self::$subcategory->save();
    }

    public static function  updateSubCategory($request, $id)
    {

        self::$subcategory = SubCategory::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$subcategory->image))
            {
                unlink(self::$subcategory->image);
            }

            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$subcategory->image;

        }

        self::saveBasicInfo(self::$subcategory, $request, self::$imageUrl);
    }

    public static function  deleteSubCategory($id)
    {

        self::$subcategory = SubCategory::find($id);

        if (file_exists(self::$subcategory->image))
        {
            unlink(self::$subcategory->image);
        }
        self::$subcategory->delete();
    }

    private static function saveBasicInfo($subcategory, $request, $imageUrl){
        $subcategory->category_id    = $request->category_id;
        $subcategory->name           = $request->name;
        $subcategory->description    = $request->description;
        $subcategory->image          = $imageUrl;
        $subcategory->save();

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }



    public static function checkStatus($id){
        self::$subcategory = SubCategory::find($id);
        if (self::$subcategory->status == 1){
            self::$subcategory->status = 0;
        }else{
            self::$subcategory->status = 1;

        }
        self::$subcategory->save();
    }
}

