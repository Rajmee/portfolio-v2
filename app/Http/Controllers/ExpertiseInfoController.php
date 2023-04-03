<?php

namespace App\Http\Controllers;

use App\Models\ExpertiseInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ExpertiseInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expertise_info_lists = ExpertiseInfo::all();
        return view('pages.dashboard.expertise.expertise-all', compact('expertise_info_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.expertise.expertise-add-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expertise_info =  new ExpertiseInfo;
        $expertise_info->expertise_info_title = $request->expertise_info_title;
        $expertise_info->expertise_info_desc = $request->expertise_info_desc;
        $expertise_info->expertise_info_icon = $request->expertise_info_icon;


        // if($request->file('expertise_info_icon')){
        //     $expertise_info_icon  = $request->file('expertise_info_icon');
        //     Storage::putFile('public/images/', $expertise_info_icon);
        //     $expertise_info->expertise_info_icon = "storage/images/". $expertise_info_icon->hashName();
        // }

        $expertise_info->save();

        return redirect()->route('admin.expertise-info.all')->with('success', 'New Expertise created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpertiseInfo  $expertiseInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ExpertiseInfo $expertiseInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpertiseInfo  $expertiseInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expertise_info =  ExpertiseInfo::find($id);
        return view('pages.dashboard.expertise.expertise-edit', compact('expertise_info'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpertiseInfo  $expertiseInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $expertise_info =  ExpertiseInfo::find($id);
        $expertise_info->expertise_info_title = $request->expertise_info_title;
        $expertise_info->expertise_info_desc = $request->expertise_info_desc;
        $expertise_info->expertise_info_icon = $request->expertise_info_icon;

        // if($request->file('expertise_info_icon')){
        //     $expertise_info_icon  = $request->file('expertise_info_icon');
        //     Storage::putFile('public/images/', $expertise_info_icon);
        //     $expertise_info->expertise_info_icon = "storage/images/". $expertise_info_icon->hashName();
        // }

        $expertise_info->save();

        return redirect()->route('admin.expertise-info.all')->with('success', 'Expertise updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpertiseInfo  $expertiseInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expertise_info =  ExpertiseInfo::find($id);
        // @unlink(public_path($blog->medialist_thumbnail));
        $expertise_info->delete();

        return redirect()->route('admin.expertise-info.all')->with('success', 'Expertise Deleted successfully');
    }
}
