<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class ProductReview extends Model
{
    use HasFactory;

    private static $review;

    public static function saveReview($request, $id){

        self::$review = new ProductReview();
        self::$review->customer_id = Session:: get('customer_id');
        self::$review->product_id = $id;
        self::$review->review = $request->review;
        self::$review->save();
    }

    public static function statusUpdate($id){
        self::$review       = ProductReview::find($id);
        if (self::$review->status == 1)
        {
            self::$review->status = 0;
        }
        else
        {
            self::$review->status  = 1;
        }
        self::$review->save();

    }

    public static function deleteReview($id){
//        self::$review       = ProductReview::find($id);
//        self::$review->delete();
        self::$review = ProductReview::find($id)->delete();
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }



}
