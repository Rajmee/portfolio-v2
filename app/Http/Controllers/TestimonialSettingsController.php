<?php

namespace App\Http\Controllers;

use App\Models\TestimonialSettings;
use Illuminate\Http\Request;

class TestimonialSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial_settings = TestimonialSettings::first();
        return view('pages.dashboard.testimonial.testimonial-title', compact('testimonial_settings'));
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
     * @param  \App\Models\TestimonialSettings  $testimonialSettings
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialSettings $testimonialSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialSettings  $testimonialSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(TestimonialSettings $testimonialSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialSettings  $testimonialSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimonialSettings $testimonialSettings)
    {
        $testimonial_settings = TestimonialSettings::firstOrNew();
        $testimonial_settings->testimonial_settings_section_title = $request->testimonial_settings_section_title;
        $testimonial_settings->testimonial_settings_title = $request->testimonial_settings_title;
        $testimonial_settings->testimonial_settings_desc = $request->testimonial_settings_desc;
        $testimonial_settings->save();
        return redirect()->route('admin.testimonial-title')->with('success',"Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialSettings  $testimonialSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialSettings $testimonialSettings)
    {
        //
    }
}
