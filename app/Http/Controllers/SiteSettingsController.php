<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_settings = SiteSettings::first();
        return view('pages.dashboard.site-settings', compact('site_settings'));
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
     * @param  \App\Models\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSettings $siteSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSettings $siteSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $site_settings = SiteSettings::firstOrNew();
        $site_settings->site_title = $request->site_title;
        $site_settings->meta_name = $request->meta_name;
        $site_settings->meta_desc = $request->meta_desc;
        $site_settings->meta_key = $request->meta_key;
        $site_settings->meta_author = $request->meta_author;
        $site_settings->site_favicon = $request->site_favicon;


        // if($request->file('site_favicon')){
        //     $site_favicon_file = $request->file('site_favicon');
        //     $site_favicon_fileName = $site_favicon_file->getClientOriginalName();
        //     $site_favicon_file->storeAs('public/images', $site_favicon_fileName);
        //     $value = $site_settings->site_favicon = 'storage/images/' . $site_favicon_fileName;
        // }

        $site_settings->save();
        return redirect()->route('admin.site')->with('success',"Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSettings $siteSettings)
    {
        //
    }
}
