<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.size.index',[
            'sizes' => Size::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.size.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Size::newSize($request);
        return back()->with('message', 'Size info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Size::checkStatus($id);
        return redirect('/sizes')->with('message', 'Size Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.size.edit',[
            'size' => Size::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Size::updateSize($request, $id);
        return redirect('sizes')->with('message', 'Size Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Size::deleteSize($id);
        return redirect('/sizes')->with('message', 'Size Info Deleted Successfully');
    }
}
