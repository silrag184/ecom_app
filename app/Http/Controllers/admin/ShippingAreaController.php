<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ShippingArea;
use Illuminate\Http\Request;

class ShippingAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.shippingarea.index',[
            'shippingAreas' => ShippingArea::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.shippingarea.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ShippingArea::saveShipping($request);
        return back()->with('message', 'Shipping Area info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        ShippingArea::checkStatus($id);
        return redirect('/shippingAreas')->with('message', 'Shipping Area Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.shippingarea.edit',[
            'shippingArea' => ShippingArea::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ShippingArea::updateShipping($request, $id);
        return redirect('shippingAreas')->with('message', 'Shipping Area Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ShippingArea::deleteShipping($id);
        return back()->with('message','Shipping Area Info Deleted Successfully');
    }
}
