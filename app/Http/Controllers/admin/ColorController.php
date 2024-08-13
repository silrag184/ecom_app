<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.color.index',[
            'colors' => Color::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.color.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Color::newColor($request);
        return back()->with('message', 'Color info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Color::checkStatus($id);
        return redirect('/colors')->with('message', 'Color Status Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.color.edit',[
            'color' => Color::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Color::updateColor($request, $id);
        return redirect('colors')->with('message', 'Color Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Color::deleteColor($id);
        return redirect('/colors')->with('message', 'Color Info Deleted Successfully');
    }
}
