<?php

namespace App\Http\Controllers;

use App\Models\FooterSettings;
use Illuminate\Http\Request;

class FooterSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer_settings = FooterSettings::first();
        return view('pages.dashboard.footer-settings', compact('footer_settings'));
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
     * @param  \App\Models\FooterSettings  $footerSettings
     * @return \Illuminate\Http\Response
     */
    public function show(FooterSettings $footerSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterSettings  $footerSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterSettings $footerSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterSettings  $footerSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterSettings $footerSettings)
    {
        $footer_settings = FooterSettings::firstOrNew();
        $footer_settings->name = $request->name;
        $footer_settings->url = $request->url;

        $footer_settings->save();
        return redirect()->route('admin.footer')->with('success',"Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterSettings  $footerSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterSettings $footerSettings)
    {
        //
    }
}
