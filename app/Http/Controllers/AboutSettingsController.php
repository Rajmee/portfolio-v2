<?php

namespace App\Http\Controllers;

use App\Models\AboutSettings;
use Illuminate\Http\Request;

class AboutSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_settings = AboutSettings::first();
        return view('pages.dashboard.about-settings', compact('about_settings'));
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
     * @param  \App\Models\AboutSettings  $aboutSettings
     * @return \Illuminate\Http\Response
     */
    public function show(AboutSettings $aboutSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutSettings  $aboutSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutSettings $aboutSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutSettings  $aboutSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutSettings $aboutSettings)
    {
        $about_settings = AboutSettings::firstOrNew();
        $about_settings->about_name = $request->about_name;
        $about_settings->about_quote = $request->about_quote;
        $about_settings->about_image = $request->about_image;
        $about_settings->about_description = $request->about_description;
        $about_settings->about_qus = $request->about_qus;
        $about_settings->about_button_text = $request->about_button_text;
        $about_settings->about_button_url = $request->about_button_url;

        // if($request->file('about_image')){
        //     $about_image_file = $request->file('about_image');
        //     $about_image_fileName = $about_image_file->getClientOriginalName();
        //     $about_image_file->storeAs('public/images', $about_image_fileName);
        //     $value = $about_settings->about_image = 'storage/images/' . $about_image_fileName;
        // }

        // dd($about_settings->about_image);

        $about_settings->save();
        return redirect()->route('admin.about')->with('success',"Data has been update successfully.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutSettings  $aboutSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutSettings $aboutSettings)
    {
        //
    }
}
