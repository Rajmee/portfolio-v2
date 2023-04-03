<?php

namespace App\Http\Controllers;

use App\Models\BusinessSettings;
use Illuminate\Http\Request;

class BusinessSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_settings = BusinessSettings::first();
        return view('pages.dashboard.business.business-title', compact('business_settings'));
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
     * @param  \App\Models\BusinessSettings  $businessSettings
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessSettings $businessSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessSettings  $businessSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessSettings $businessSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusinessSettings  $businessSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessSettings $businessSettings)
    {
        $business_settings = BusinessSettings::firstOrNew();
        $business_settings->business_settings_section_title = $request->business_settings_section_title;
        $business_settings->business_settings_title = $request->business_settings_title;
        $business_settings->business_settings_desc = $request->business_settings_desc;
        $business_settings->save();
        return redirect()->route('admin.business-title')->with('success',"Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessSettings  $businessSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessSettings $businessSettings)
    {
        //
    }
}
