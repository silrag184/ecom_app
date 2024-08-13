<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brand.index',[
            'brands' => Brand::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brand::newBrand($request);
        return back()->with('message', 'Brand info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Brand::checkStatus($id);
        return redirect('/brands')->with('message', 'Brand Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.brand.edit',[
            'brand' => Brand::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('brands')->with('message', 'Brand Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::deleteBrand($id);
        return redirect('/brands')->with('message', 'Brand Info Deleted Successfully');
    }
}
