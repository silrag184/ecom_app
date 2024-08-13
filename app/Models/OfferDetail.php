<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferDetail extends Model
{
    use HasFactory;

    private static $productOffer, $productOffers;

    public static function newOfferDetail($products, $offerId)
    {
        foreach($products as $product)
        {
            self::$productOffer = new OfferDetail();
            self::$productOffer->offer_id = $offerId;
            self::$productOffer->product_id = $product;
            self::$productOffer->save();
        }
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}


