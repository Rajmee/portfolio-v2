<?php

namespace App\Http\Controllers;

use App\Models\BannerSettings;
use App\Models\HeroSlider;
use Illuminate\Http\Request;


class BannerSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner_settings = BannerSettings::first();
        return view('pages.dashboard.banner-settings', compact('banner_settings'));
    }

    public function sliderIndex()
    {
        $heroslider_list = HeroSlider::all();
        return view('pages.dashboard.herosliders.slider-all', compact('heroslider_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.herosliders.slider-add-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hero_slider =  new HeroSlider;
        $hero_slider->hero_sub_title = $request->hero_sub_title;
        $hero_slider->hero_title = $request->hero_title;
        $hero_slider->hero_button_text = $request->hero_button_text;
        $hero_slider->hero_button_url = $request->hero_button_url;
        $hero_slider->hero_img = $request->hero_img;


        $hero_slider->save();

        return redirect()->route('admin.sliders.all')->with('success', 'New Slider created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerSettings  $bannerSettings
     * @return \Illuminate\Http\Response
     */
    public function show(BannerSettings $bannerSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerSettings  $bannerSettings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hero_slider =  HeroSlider::find($id);
        return view('pages.dashboard.herosliders.slider-edit', compact('hero_slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BannerSettings  $bannerSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $banner_settings = BannerSettings::firstOrNew();
        $banner_settings->hero_tag_one = $request->hero_tag_one;
        $banner_settings->hero_tag_two = $request->hero_tag_two;
        $banner_settings->hero_tag_three = $request->hero_tag_three;
        $banner_settings->save();
        return redirect()->route('admin.hero')->with('success', "Data has been update successfully.");
    }

    public function sliderUpdate(Request $request, $id)
    {
        $hero_slider =  HeroSlider::find($id);
        $hero_slider->hero_sub_title = $request->hero_sub_title;
        $hero_slider->hero_title = $request->hero_title;
        $hero_slider->hero_button_text = $request->hero_button_text;
        $hero_slider->hero_button_url = $request->hero_button_url;
        $hero_slider->hero_img = $request->hero_img;


        $hero_slider->save();


        return redirect()->route('admin.sliders.all')->with('success', 'Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerSettings  $bannerSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hero_slider =  HeroSlider::find($id);
        // @unlink(public_path($blog->medialist_thumbnail));
        $hero_slider->delete();

        return redirect()->route('admin.sliders.all')->with('success', 'Slider Deleted successfully');
    }
}
