<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.privacy-policy.index',[
            'privacy_policy' => PrivacyPolicy::latest()->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.privacy-policy.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PrivacyPolicy::newPrivacyPolicy($request);
        return redirect('/privacy-policy')->with('message','Privacy Policy Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.privacy-policy.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        PrivacyPolicy::updatePrivacyPolicy($request, $id);
        return back()->with('message', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
