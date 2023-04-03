<?php

namespace App\Http\Controllers;

use App\Models\ExpertiseTitle;
use Illuminate\Http\Request;

class ExpertiseTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expertise_title_settings = ExpertiseTitle::first();
        return view('pages.dashboard.expertise.expertise-title', compact('expertise_title_settings'));
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
     * @param  \App\Models\ExpertiseTitle  $expertiseTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ExpertiseTitle $expertiseTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpertiseTitle  $expertiseTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpertiseTitle $expertiseTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpertiseTitle  $expertiseTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpertiseTitle $expertiseTitle)
    {
        $expertise_title_settings = ExpertiseTitle::firstOrNew();
        $expertise_title_settings->expertise_section_title = $request->expertise_section_title;
        $expertise_title_settings->expertise_section_desc = $request->expertise_section_desc;
        $expertise_title_settings->save();
        return redirect()->route('admin.expertise-title')->with('success',"Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpertiseTitle  $expertiseTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpertiseTitle $expertiseTitle)
    {
        //
    }
}
