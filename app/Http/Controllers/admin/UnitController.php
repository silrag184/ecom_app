<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.unit.index',[
            'units' => Unit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.unit.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Unit::saveUnit($request);
        return back()->with('message', 'Unit info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Unit::checkStatus($id);
        return redirect('/units')->with('message', 'Unit Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.unit.edit',[
            'unit' => Unit::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Unit::updateUnit($request, $id);
        return redirect('units')->with('message', 'Unit Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Unit::deleteUnit($id);
        return back()->with('message','Unit Info Deleted Successfully');
    }
}
