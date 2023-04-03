<?php

namespace App\Http\Controllers;

use App\Models\BusinessList;
use Illuminate\Http\Request;

class BusinessListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_info_lists = BusinessList::all();
        return view('pages.dashboard.business.business-all', compact('business_info_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.business.business-add-new');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business_info = new BusinessList;
        $business_info->business_list_img = $request->business_list_img;
        $business_info->business_list_title = $request->business_list_title;
        $business_info->business_list_pos = $request->business_list_pos;
        $business_info->business_list_comp = $request->business_list_comp;
        $business_info->business_list_button_text = $request->business_list_button_text;
        $business_info->business_list_button_url = $request->business_list_button_url;


        $business_info->save();

        return redirect()->route('admin.business-info.all')->with('success', 'New Business created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessList  $businessList
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessList $businessList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessList  $businessList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business_info = BusinessList::find($id);
        return view('pages.dashboard.business.business-edit', compact('business_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusinessList  $businessList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $business_info = BusinessList::find($id);
        $business_info->business_list_img = $request->business_list_img;
        $business_info->business_list_title = $request->business_list_title;
        $business_info->business_list_pos = $request->business_list_pos;
        $business_info->business_list_comp = $request->business_list_comp;
        $business_info->business_list_button_text = $request->business_list_button_text;
        $business_info->business_list_button_url = $request->business_list_button_url;


        $business_info->save();

        return redirect()->route('admin.business-info.all')->with('success', 'Business updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessList  $businessList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business_info =  BusinessList::find($id);
        // @unlink(public_path($blog->medialist_thumbnail));
        $business_info->delete();

        return redirect()->route('admin.business-info.all')->with('success', 'Business Deleted successfully');
    }
}
