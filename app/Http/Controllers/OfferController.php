<?php

namespace App\Http\Controllers;

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\OfferDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.offer.index',[ 'offers' => Offer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.offer.add',[
            'products' => Product::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    private $offer;
    public function store(Request $request)
    {

        $this->offer = Offer::newOffer($request);
        OfferDetail::newOfferDetail($request->product, $this->offer->id);
        foreach ($request->product as $id){
            $product = Product::find($id);
            $sellingPrice = $product->regular_price - round((($product->regular_price * $request->percentage)/100) );
            $product->selling_price = $sellingPrice;
            $product->discount_type = 'percent';
            $product->discount_amount = $request->percentage;
            $product->save();
        }

        return redirect('/offer')->with('message','Offer Create successfully.');


//        $this->offer = Offer::newOffer($request);



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Offer::checkStatus($id);
        return redirect('/offer')->with('message', 'Offer Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Offer $offer)
    {
        return view('admin.product.offer.edit',[
            'products'=>Product::all(),
            'offer' => $offer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Offer::updateOffer($request, $id);
        return redirect('/offer')->with('message', 'Offer Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Offer::OfferDelete($id);
        return back();
    }
}
