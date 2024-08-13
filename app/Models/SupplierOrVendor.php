<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SupplierOrVendor extends Model
{
    use HasFactory;

    private static $suplOrven, $image0, $image1, $image2, $imageUrl0, $imageUrl1, $imageUrl2, $dir, $imageName, $extension;

    public static function newSuppliVendor($request)
    {
        if ($request->file('person_image')) {
            self::profileImageUrl($request);
        } else {
            self::$imageUrl0 = ' ';
        }

        self::$suplOrven = new SupplierOrVendor();
        self::$suplOrven->supplier_type          = $request->supplier_type;
        self::$suplOrven->person_image           = self::$imageUrl0;
        self::$suplOrven->name                   = $request->name;
        self::$suplOrven->phone                  = $request->phone;
        self::$suplOrven->email                  = $request->email;
        self::$suplOrven->company_name           = $request->company_name;
        self::$suplOrven->address                = $request->address;
        self::$suplOrven->bank_account           = $request->bank_account;
        self::$suplOrven->trade_lic              = $request->trade_lic;
        self::$suplOrven->trad_lic_image         = self::tradLicImageUrl($request);
        self::$suplOrven->nid                   = $request->nid;
        self::$suplOrven->nid_image              = self::nidImageUrl($request);
        self::$suplOrven->save();
    }

    private static function profileImageUrl($request)
    {
        self::$image0 = $request->file('person_image');
        self::$extension = self::$image0->getClientOriginalExtension();
        self::$imageName = rand(20000, 8000000) . '.' . self::$extension;
        self::$dir = 'upload/supplier-vendor-images/profile-images/';
        self::$image0->move(self::$dir, self::$imageName);
        self::$imageUrl0 = self::$dir . self::$imageName;
        return self::$imageUrl0;
    }

    private static function tradLicImageUrl($request)
    {
        self::$image1 = $request->file('trad_lic_image');
        self::$extension = self::$image1->getClientOriginalExtension();
        self::$imageName = rand(25000, 8000000) . '.' . self::$extension;
        self::$dir = 'upload/supplier-vendor-images/trad-lic-images/';
        self::$image1->move(self::$dir, self::$imageName);
        self::$imageUrl1 = self::$dir . self::$imageName;
        return self::$imageUrl1;
    }

    private static function nidImageUrl($request)
    {
        self::$image2 = $request->file('nid_image');
        self::$extension = self::$image2->getClientOriginalExtension();
        self::$imageName = rand(26000, 8000000) . '.' . self::$extension;
        self::$dir = 'upload/supplier-vendor-images/nid-images/';
        self::$image2->move(self::$dir, self::$imageName);
        self::$imageUrl2 = self::$dir . self::$imageName;
        return self::$imageUrl2;
    }


    public static function  updateSuppliVendor($request, $id)
    {

        self::$suplOrven = SupplierOrVendor::find($id);

        if ($request->file('person_image'))
        {
            if (file_exists(self::$suplOrven->person_image))
            {
                unlink(self::$suplOrven->person_image);
            }

            self::profileImageUrl($request);
        }
        else{
            self::$imageUrl0 = self::$suplOrven->person_image;

        }

        if($request->file('trad_lic_image')){
            if(self::$suplOrven->trad_lic_image){
                if (file_exists(self::$suplOrven->trad_lic_image)){
                    unlink(self::$suplOrven->trad_lic_image);

                }
            }
            self::$suplOrven->trad_lic_image = self::tradLicImageUrl($request);
        }

        if($request->file('nid_image')){
            if(self::$suplOrven->nid_image){
                if (file_exists(self::$suplOrven->nid_image)){
                    unlink(self::$suplOrven->nid_image);

                }
            }
            self::$suplOrven->nid_image = self::nidImageUrl($request);
        }

        self::$suplOrven = new SupplierOrVendor();
        self::$suplOrven->supplier_type          = $request->supplier_type;
        self::$suplOrven->person_image           = self::$imageUrl0;
        self::$suplOrven->name                   = $request->name;
        self::$suplOrven->phone                  = $request->phone;
        self::$suplOrven->email                  = $request->email;
        self::$suplOrven->company_name           = $request->company_name;
        self::$suplOrven->address                = $request->address;
        self::$suplOrven->bank_account           = $request->bank_account;
        self::$suplOrven->trade_lic              = $request->trade_lic;
        self::$suplOrven->nid                   = $request->nid;
        self::$suplOrven->save();
    }

    public static function  deleteSuppliVendor($id)
    {

        self::$suplOrven = SupplierOrVendor::find($id);

        if (file_exists(self::$suplOrven->image))
        {
            unlink(self::$suplOrven->image);
        }
        self::$suplOrven->delete();
    }




    public static function checkStatus($id){
        self::$suplOrven = SupplierOrVendor::find($id);
        if (self::$suplOrven->status == 1){
            self::$suplOrven->status = 0;
        }else{
            self::$suplOrven->status = 1;

        }
        self::$suplOrven->save();
    }


}
