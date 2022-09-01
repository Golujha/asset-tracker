<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use App\Models\AssetsType;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['assets'] = Assets::all();
        return view("pages/manageAssets",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['assets_type']=AssetsType::all();
        return view("pages/insertAssets",$data);
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
        if($request->isMethod("post")){
            $data=$request->validate([
               'assets_name' => 'required',
               'assets_code' => 'required',
               'assets_type_id' => 'required',
               'assets_image' => 'required|image',
           ]);
       
           
           $data=new Assets();
           $data->assets_name=$request->assets_name;
           $data->assets_code=$request->assets_code;
           $data->assets_type_id=$request->assets_type_id;
           $filename=$request->assets_image->getClientOriginalName();
           $request->assets_image->move(public_path("asset"),$filename);
           $data->assets_image=$filename;
       
           $data->save();
           return redirect()->route("assets.index");
       }


    }

    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assets  $assets
     * @return \Illuminate\Http\Response
     */
    public function show(Assets $assets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assets  $assets
     * @return \Illuminate\Http\Response
     */
    public function edit(Assets $assets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assets  $assets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assets $assets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assets  $assets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assets $assets)
    {
        //
        $assets->delete();
        return redirect()->route("assets.index");
    }
}
