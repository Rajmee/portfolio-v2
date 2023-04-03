<?php

namespace App\Http\Controllers;

use App\Models\BlogTitleSetting;
use Illuminate\Http\Request;

class BlogTitleSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_section_settings = BlogTitleSetting::first();
        return view('pages.dashboard.blog.blog-title', compact('blog_section_settings'));
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
     * @param  \App\Models\BlogTitleSetting  $blogTitleSetting
     * @return \Illuminate\Http\Response
     */
    public function show(BlogTitleSetting $blogTitleSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogTitleSetting  $blogTitleSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogTitleSetting $blogTitleSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogTitleSetting  $blogTitleSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogTitleSetting $blogTitleSetting)
    {
        $blog_section_settings = BlogTitleSetting::firstOrNew();
        $blog_section_settings->blog_section_title = $request->blog_section_title;
        $blog_section_settings->blog_title = $request->blog_title;
        $blog_section_settings->save();

        return redirect()->route('admin.blog-title')->with('success', "Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogTitleSetting  $blogTitleSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogTitleSetting $blogTitleSetting)
    {
        //
    }
}
