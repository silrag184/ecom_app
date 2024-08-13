<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    private static $company ;

    public static function newCompany($request){
        self::$company                      = new Company();
        self::$company->name                = $request->name;
        self::$company->slogan              = $request->slogan;
        self::$company->domain_url          = $request->domain_url;
        self::$company->facebook_url        = $request->facebook_url;
        self::$company->twitter_url         = $request->twitter_url;
        self::$company->youtube_url         = $request->youtube_url;
        self::$company->linked_in_url       = $request->linked_in_url;
        self::$company->instagram_url       = $request->instagram_url;
        self::$company->logo_jpg            = getImageUrl($request->logo_jpg,'upload/company-images');
        self::$company->logo_png            = getImageUrl($request->logo_png,'upload/company-images');
        self::$company->favicon             = getImageUrl($request->favicon,'upload/company-images');
        self::$company->trade_license       = getImageUrl($request->trade_license,'upload/company-images');
        self::$company->tin_certificate     = getImageUrl($request->tin_certificate,'upload/company-images');
        self::$company->ecab_certificate    = getImageUrl($request->ecab_certificate,'upload/company-images');
        self::$company->payment_image       = getImageUrl($request->payment_image,'upload/company-images');
        self::$company->contact_email       = $request->contact_email;
        self::$company->support_email       = $request->support_email;
        self::$company->contact_mobile      = $request->contact_mobile;
        self::$company->support_mobile      = $request->support_mobile;
        self::$company->fax_number          = $request->fax_number;
        self::$company->address             = $request->address;
        self::$company->biography           = $request->biography;
        self::$company->save();
    }

    public static function updateCompany($request, $id)
    {
        self::$company = Company::find($id);
        if ($request->logo_jpg)
        {
            if (file_exists(self::$company->logo_jpg))
            {
                unlink(self::$company->logo_jpg);
            }
            $logoJpgUrl = getImageUrl($request->logo_jpg, 'upload/company-images/');
        }
        else
        {
            $logoJpgUrl = self::$company->logo_jpg;
        }

        if ($request->logo_png)
        {
            if (file_exists(self::$company->logo_png))
            {
                unlink(self::$company->logo_png);
            }
            $logoPngUrl = getImageUrl($request->logo_png, 'upload/company-images/');
        }
        else
        {
            $logoPngUrl = self::$company->logo_png;
        }

        if ($request->favicon)
        {
            if (file_exists(self::$company->favicon))
            {
                unlink(self::$company->favicon);
            }
            $logoFaviconUrl = getImageUrl($request->favicon, 'upload/company-images/');
        }
        else
        {
            $logoFaviconUrl = self::$company->favicon;
        }

        if ($request->trade_license)
        {
            if (file_exists(self::$company->trade_license))
            {
                unlink(self::$company->trade_license);
            }
            $logoTradeLicenseUrl = getImageUrl($request->trade_license, 'upload/company-images/');
        }
        else
        {
            $logoTradeLicenseUrl = self::$company->trade_license;
        }

        if ($request->tin_certificate)
        {
            if (file_exists(self::$company->tin_certificate))
            {
                unlink(self::$company->tin_certificate);
            }
            $logoTinCertificateUrl = getImageUrl($request->tin_certificate, 'upload/company-images/');
        }
        else
        {
            $logoTinCertificateUrl = self::$company->tin_certificate;
        }

        if ($request->ecab_certificate)
        {
            if (file_exists(self::$company->ecab_certificate))
            {
                unlink(self::$company->ecab_certificate);
            }
            $logoEcabCertificateUrl = getImageUrl($request->ecab_certificate, 'upload/company-images/');
        }
        else
        {
            $logoEcabCertificateUrl = self::$company->ecab_certificate;
        }

        if ($request->payment_image)
        {
            if (file_exists(self::$company->payment_image))
            {
                unlink(self::$company->payment_image);
            }
            $logoPaymentImageUrl = getImageUrl($request->payment_image, 'upload/company-images/');
        }
        else
        {
            $logoPaymentImageUrl = self::$company->payment_image;
        }

        self::$company->name            = $request->name;
        self::$company->slogan          = $request->slogan;
        self::$company->domain_url      = $request->domain_url;
        self::$company->facebook_url    = $request->facebook_url;
        self::$company->twitter_url     = $request->twitter_url;
        self::$company->youtube_url     = $request->youtube_url;
        self::$company->linked_in_url   = $request->linked_in_url;
        self::$company->instagram_url   = $request->instagram_url;
        self::$company->logo_jpg        = $logoJpgUrl;
        self::$company->logo_png        = $logoPngUrl;
        self::$company->favicon         = $logoFaviconUrl;
        self::$company->trade_license   = $logoTradeLicenseUrl;
        self::$company->tin_certificate = $logoTinCertificateUrl;
        self::$company->ecab_certificate= $logoEcabCertificateUrl;
        self::$company->payment_image   = $logoPaymentImageUrl;
        self::$company->contact_email   = $request->contact_email;
        self::$company->support_email   = $request->support_email;
        self::$company->contact_mobile  = $request->contact_mobile;
        self::$company->support_mobile  = $request->support_mobile;
        self::$company->fax_number      = $request->fax_number;
        self::$company->address         = $request->address;
        self::$company->biography       = $request->biography;
        self::$company->save();
    }
}
