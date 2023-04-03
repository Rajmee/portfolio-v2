<?php

namespace App\Http\Controllers;

use App\Models\AchievementSettings;
use Illuminate\Http\Request;

class AchievementSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievement_settings = AchievementSettings::first();
        return view('pages.dashboard.achievement.achievement-title', compact('achievement_settings'));
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
     * @param  \App\Models\AchievementSettings  $achievementSettings
     * @return \Illuminate\Http\Response
     */
    public function show(AchievementSettings $achievementSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AchievementSettings  $achievementSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(AchievementSettings $achievementSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AchievementSettings  $achievementSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AchievementSettings $achievementSettings)
    {
        $achievement_settings = AchievementSettings::firstOrNew();
        $achievement_settings->section_title = $request->section_title;
        $achievement_settings->title = $request->title;
        $achievement_settings->section_list_title = $request->section_list_title;
        $achievement_settings->ach_col_1_count = $request->ach_col_1_count;
        $achievement_settings->ach_col_1_title = $request->ach_col_1_title;
        $achievement_settings->ach_col_1_desc = $request->ach_col_1_desc;
        $achievement_settings->ach_col_1_icon = $request->ach_col_1_icon;
        $achievement_settings->ach_col_2_count = $request->ach_col_2_count;
        $achievement_settings->ach_col_2_title = $request->ach_col_2_title;
        $achievement_settings->ach_col_2_desc = $request->ach_col_2_desc;
        $achievement_settings->ach_col_2_icon = $request->ach_col_2_icon;
        $achievement_settings->ach_col_3_count = $request->ach_col_3_count;
        $achievement_settings->ach_col_3_title = $request->ach_col_3_title;
        $achievement_settings->ach_col_3_desc = $request->ach_col_3_desc;
        $achievement_settings->ach_col_3_icon = $request->ach_col_3_icon;
        $achievement_settings->ach_col_4_count = $request->ach_col_4_count;
        $achievement_settings->ach_col_4_title = $request->ach_col_4_title;
        $achievement_settings->ach_col_4_desc = $request->ach_col_4_desc;
        $achievement_settings->ach_col_4_icon = $request->ach_col_4_icon;

        $achievement_settings->save();
        return redirect()->route('admin.achievement-title')->with('success', "Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AchievementSettings  $achievementSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(AchievementSettings $achievementSettings)
    {
        //
    }
}
