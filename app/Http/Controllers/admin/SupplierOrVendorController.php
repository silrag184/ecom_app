<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupplierOrVendor;

class SupplierOrVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.supplier-vendor.index',[
            'supplier' => SupplierOrVendor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.supplier-vendor.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SupplierOrVendor:: newSuppliVendor($request);
        return redirect(route('supplier.index'))->with('message', 'Info Add successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        SupplierOrVendor::checkStatus($id);
        return redirect(route('supplier.index'))->with('message', 'Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.supplier-vendor.edit',[
            'supplier' => SupplierOrVendor::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SupplierOrVendor::updateSuppliVendor($request, $id);
        return redirect(route('supplier.index'))->with('message', 'Status Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SupplierOrVendor::deleteSuppliVendor($id);
        return redirect(route('supplier.index'))->with('dmessage', 'Status Delete Successfully');
    }
}
