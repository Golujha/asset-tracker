<?php

namespace App\Http\Controllers;

use App\Models\AssetsType;
use Illuminate\Http\Request;

class AssetsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("pages/manageAssetType",['assetsType' => AssetsType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'assets_type_name'=>'required'
        ]);

        $at = new AssetsType();
        $at->assets_type_name = $request->assets_type_name;
        $at->assets_type_description = $request->assets_type_description;
        $at->save();

        return redirect()->route("assetsType.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetsType  $assetsType
     * @return \Illuminate\Http\Response
     */
    public function show(AssetsType $assetsType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetsType  $assetsType
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetsType $assetsType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssetsType  $assetsType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssetsType $assetsType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetsType  $assetsType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetsType $assetsType)
    {
        //
        $assetsType->delete();
        return redirect()->route("assetsType.index");
    }
}
