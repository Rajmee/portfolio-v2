<?php

namespace App\Http\Controllers;

use App\Models\TestimonialList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TestimonialListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial_info_lists = TestimonialList::all();
        return view('pages.dashboard.testimonial.testimonial-all', compact('testimonial_info_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.testimonial.testimonial-add-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial_info = new TestimonialList;
        $testimonial_info->testimonial_list_name = $request->testimonial_list_name;
        $testimonial_info->testimonial_list_comment = $request->testimonial_list_comment;
        $testimonial_info->testimonial_list_info = $request->testimonial_list_info;
        $testimonial_info->testimonial_list_image = $request->testimonial_list_image;

        // if($request->file('testimonial_list_image')){
        //     $testimonial_list_image  = $request->file('testimonial_list_image');
        //     Storage::putFile('public/images/', $testimonial_list_image);
        //     $testimonial_info->testimonial_list_image = "storage/images/". $testimonial_list_image->hashName();
        // }

        $testimonial_info->save();

        return redirect()->route('admin.testimonial-info.all')->with('success', 'New Testimonial created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestimonialList  $testimonialList
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialList $testimonialList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialList  $testimonialList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial_info =  TestimonialList::find($id);
        return view('pages.dashboard.testimonial.testimonial-edit', compact('testimonial_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialList  $testimonialList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial_info = TestimonialList::find($id);
        $testimonial_info->testimonial_list_name = $request->testimonial_list_name;
        $testimonial_info->testimonial_list_comment = $request->testimonial_list_comment;
        $testimonial_info->testimonial_list_info = $request->testimonial_list_info;
        $testimonial_info->testimonial_list_image = $request->testimonial_list_image;


        // if($request->file('testimonial_list_image')){
        //     $testimonial_list_image  = $request->file('testimonial_list_image');
        //     Storage::putFile('public/images/', $testimonial_list_image);
        //     $testimonial_info->testimonial_list_image = "storage/images/". $testimonial_list_image->hashName();
        // }

        $testimonial_info->save();

        return redirect()->route('admin.testimonial-info.all')->with('success', 'Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialList  $testimonialList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial_info =  TestimonialList::find($id);
        // @unlink(public_path($blog->medialist_thumbnail));
        $testimonial_info->delete();

        return redirect()->route('admin.testimonial-info.all')->with('success', 'Testimonial Deleted successfully');
    }
}
