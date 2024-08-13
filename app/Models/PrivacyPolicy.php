<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    use HasFactory;

    private static $privacyPolicy;

    public static function newPrivacyPolicy($request){
        self::$privacyPolicy                            = new PrivacyPolicy();
        self::$privacyPolicy->shipping_policy           = $request->shipping_policy;
        self::$privacyPolicy->return_policy             = $request->return_policy;
        self::$privacyPolicy->terms_policy              = $request->terms_policy;
        self::$privacyPolicy->fashion_policy            = $request->fashion_policy;
        self::$privacyPolicy->electronics_policy        = $request->electronics_policy;
        self::$privacyPolicy->cosmetic_policy           = $request->cosmetic_policy;
        self::$privacyPolicy->food_policy               = $request->food_policy;
        self::$privacyPolicy->stationary_policy         = $request->stationary_policy;
        self::$privacyPolicy->drug_policy               = $request->drug_policy;
        self::$privacyPolicy->construction_policy       = $request->construction_policy;
        self::$privacyPolicy->save();
    }

    public static function updatePrivacyPolicy($request, $id){
        self::$privacyPolicy                            = PrivacyPolicy::find($id);
        self::$privacyPolicy->shipping_policy           = $request->shipping_policy;
        self::$privacyPolicy->return_policy             = $request->return_policy;
        self::$privacyPolicy->terms_policy              = $request->terms_policy;
        self::$privacyPolicy->fashion_policy            = $request->fashion_policy;
        self::$privacyPolicy->electronics_policy        = $request->electronics_policy;
        self::$privacyPolicy->cosmetic_policy           = $request->cosmetic_policy;
        self::$privacyPolicy->food_policy               = $request->food_policy;
        self::$privacyPolicy->stationary_policy         = $request->stationary_policy;
        self::$privacyPolicy->drug_policy               = $request->drug_policy;
        self::$privacyPolicy->construction_policy       = $request->construction_policy;
        self::$privacyPolicy->save();
    }
}
