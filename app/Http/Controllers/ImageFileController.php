<?php

namespace App\Http\Controllers;

use App\Models\ImageFile;
use App\Models\ImageSectionTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image_section = ImageSectionTitle::first();
        $image_settings = ImageFile::all();
        return view('pages.dashboard.image-settings', compact('image_section','image_settings'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageFile  $imageFile
     * @return \Illuminate\Http\Response
     */
    public function show(ImageFile $imageFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageFile  $imageFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageFile $imageFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageFile  $imageFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $image_section_title = ImageSectionTitle::firstOrNew();
        $image_section_title->section_title = $request->section_title;
        $image_section_title->title = $request->title;

        $image_section_title->save();
        return redirect()->route('admin.image')->with('success',"Data has been update successfully.");
    }

    public function upload(Request $request)
    {
        // $images = $request->file('image');
        $images = $request->image;
        // dd($images);
        // var_dump( explode( ',', $images ) );
        $image_list = explode( ',' , $images[0]);
        foreach ($image_list as $img)
        {
            // dd($img);
            $images = new ImageFile;
            $images->image = $img;
            $images->save();
        }

        // $images->image = $request->image;
        // $images->save();

        // foreach ($images as $img)
        // {
            // $images = new ImageFile;
            // dd($img);

            // $img_fileName = $img->getClientOriginalName();
            // $img->storeAs('public/images', $img_fileName);
            // $value = $images->image = 'storage/images/' . $img_fileName;
            // $images->save();

        // }
        // $images_list = new ImageFile;
        // if($request->file('image')){
        //     $image_file = $request->file('image');
        //     $image_fileName = $image_file->getClientOriginalName();
        //     $image_file->storeAs('public/images', $image_fileName);
        //     $value = $images_list->image = 'storage/images/' . $image_fileName;
        // }

        // $images_list->save();
        return redirect()->route('admin.image')->with('success',"Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageFile  $imageFile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_file = ImageFile::find($id);
        $image_file->delete();

        return redirect()->route('admin.image')->with('success', 'Image Deleted successfully');
    }
}
