<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    private static $wishlist, $customer_id;

    public static function saveWishlist($id,$customer_id)
    {

        self::$wishlist = new Wishlist();
        self::$wishlist->customer_id = $customer_id;
        self::$wishlist->product_id  = $id;
        self::$wishlist->added_date  = date('Y-m-d');
        self::$wishlist->added_timestamp  = strtotime('Y-m-d');
        self::$wishlist->save();
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public static function deleteWishlist($id){
        self::$wishlist = Wishlist::find($id);
        self::$wishlist->delete();
    }
}
