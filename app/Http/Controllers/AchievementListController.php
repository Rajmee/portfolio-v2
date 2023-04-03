<?php

namespace App\Http\Controllers;

use App\Models\AchievementList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AchievementListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievement_info_lists = AchievementList::all();
        return view('pages.dashboard.achievement.achievement-all', compact('achievement_info_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.achievement.achievement-add-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $achievement_info_lists =  new AchievementList;
        $achievement_info_lists->org_title = $request->org_title;
        $achievement_info_lists->org_date = $request->org_date;
        $achievement_info_lists->org_desc = $request->org_desc;
        $achievement_info_lists->org_button_text = $request->org_button_text;
        $achievement_info_lists->org_button_url = $request->org_button_url;
        $achievement_info_lists->org_img = $request->org_img;

        // if($request->file('org_img')){
        //     $achievement_info_lists_img  = $request->file('org_img');
        //     Storage::putFile('public/images/', $achievement_info_lists_img);
        //     $achievement_info_lists->org_img = "storage/images/". $achievement_info_lists_img->hashName();
        // }

        $achievement_info_lists->save();

        return redirect()->route('admin.achievement-info.all')->with('success', 'New Achievement created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AchievementList  $achievementList
     * @return \Illuminate\Http\Response
     */
    public function show(AchievementList $achievementList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AchievementList  $achievementList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $achievement_info_lists =  AchievementList::find($id);
        return view('pages.dashboard.achievement.achievement-edit', compact('achievement_info_lists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AchievementList  $achievementList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $achievement_info_lists = AchievementList::find($id);
        $achievement_info_lists->org_title = $request->org_title;
        $achievement_info_lists->org_date = $request->org_date;
        $achievement_info_lists->org_desc = $request->org_desc;
        $achievement_info_lists->org_button_text = $request->org_button_text;
        $achievement_info_lists->org_button_url = $request->org_button_url;
        $achievement_info_lists->org_img = $request->org_img;


        // if($request->file('org_img')){
        //     $achievement_info_lists_img  = $request->file('org_img');
        //     Storage::putFile('public/images/', $achievement_info_lists_img);
        //     $achievement_info_lists->org_img = "storage/images/". $achievement_info_lists_img->hashName();
        // }

        $achievement_info_lists->save();

        return redirect()->route('admin.achievement-info.all')->with('success', 'Achievement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AchievementList  $achievementList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $achievement_info_lists =  AchievementList::find($id);
        // @unlink(public_path($blog->medialist_thumbnail));
        $achievement_info_lists->delete();

        return redirect()->route('admin.achievement-info.all')->with('success', 'Achievement Deleted successfully');
    }
}
