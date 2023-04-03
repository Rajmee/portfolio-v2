<?php

namespace App\Http\Controllers;

use App\Models\ImageSectionTitle;
use Illuminate\Http\Request;

class ImageSectionTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image_section = ImageSectionTitle::first();
        return view('pages.dashboard.image-settings', compact('image_section'));
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
     * @param  \App\Models\ImageSectionTitle  $imageSectionTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ImageSectionTitle $imageSectionTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageSectionTitle  $imageSectionTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageSectionTitle $imageSectionTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageSectionTitle  $imageSectionTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageSectionTitle $imageSectionTitle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageSectionTitle  $imageSectionTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageSectionTitle $imageSectionTitle)
    {
        //
    }
}
