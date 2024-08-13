<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;


    private static $offer, $image, $imageUrl, $directory, $imageName, $extension, $offerDetail, $offerDetails;


    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 500000).'.'.self::$extension;
        self::$directory = 'upload/offer-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
    }

    public static function newOffer($request){

        if ($request->file('image'))
        {
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }

        return self::saveBasicInfo(new Offer(), $request, self::$imageUrl);
    }

    public static function updateOffer($request, $id){
        self::$offer = Offer::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$offer->image))
            {
                unlink(self::$offer->image);
            }

            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$offer->image;
        }

        self::saveBasicInfo(self::$offer, $request, self::$imageUrl);
    }

    public static function saveBasicInfo($offer, $request, $imageUrl){
        $startDateTimeArray = explode('T', $request->start_date);
        $endDateTimeArray   = explode('T', $request->end_date);

        $offer->name                            = $request->name;
        $offer->start_date                      = $startDateTimeArray[0];
        $offer->start_date_timestamp            = strtotime($startDateTimeArray[0]);
        $offer->start_datetime                  = $request->start_date;
        $offer->start_datetime_timestamp        = strtotime($request->start_date);
        $offer->end_date                        = $endDateTimeArray[0];
        $offer->end_date_timestamp              = strtotime($endDateTimeArray[0]);
        $offer->end_datetime                    = $request->end_date;
        $offer->end_datetime_timestamp          = strtotime($request->end_date);
        $offer->percentage                      = $request->percentage;
        $offer->image                           = $imageUrl;
        $offer->description                     = $request->description;
        $offer->offer_type                      = $request->offer_type;
        $offer->save();
        return $offer;
    }


    public static function OfferDelete($id)
    {
        self::$offer = Offer::find($id);
        if(file_exists(self::$offer->image))
        {
            unlink(self::$offer->image);
        }
        self::$offerDetails = OfferDetail::where('offer_id',self::$offer->id)->get();
        foreach (self::$offerDetails as self::$offerDetail)
        {
            self::$offerDetail->delete();
        }
        self::$offer->delete();
    }

    public function offerDetails()
    {
        return $this->hasMany(OfferDetail::class);
    }

    public static function checkStatus($id){
        self::$offer = Offer::find($id);
        if (self::$offer->status == 1){
            self::$offer->status = 0;
        }else{
            self::$offer->status = 1;

        }
        self::$offer->save();
    }

}
