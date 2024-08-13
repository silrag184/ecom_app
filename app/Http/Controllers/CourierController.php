<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.courier.index',[
            'couriers' => Courier::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courier.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Courier::newCourier($request);
        return back()->with('message','Courier Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Courier::checkStatus($id);
        return redirect('/courier')->with('message', 'Courier Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.courier.edit',[
            'courier' => Courier::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Courier::updateCourier($request, $id);
        return redirect('/courier')->with('message','Courier Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Courier::deleteCourierInfo($id);
        return redirect('/courier')->with('message', 'Courier Info Deleted Successfully');
    }
}
