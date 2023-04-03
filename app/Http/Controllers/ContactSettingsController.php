<?php

namespace App\Http\Controllers;

use App\Models\ContactSettings;
use App\Models\MessageType;
use Illuminate\Http\Request;

class ContactSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_settings = ContactSettings::first();
        return view('pages.dashboard.contact-settings', compact('contact_settings'));
    }

    public function indexMessage()
    {
        $message_type = MessageType::all();
        return view('pages.dashboard.message.message-type.message-type-all', compact('message_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.message.message-type.message-type-add');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message_type = new MessageType;
        $message_type->topic = $request->topic;

        $message_type->save();

        return redirect()->route('admin.message-type.all')->with('success', 'New Type created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactSettings  $contactSettings
     * @return \Illuminate\Http\Response
     */
    public function show(ContactSettings $contactSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactSettings  $contactSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactSettings $contactSettings, $id)
    {
        $message_type = MessageType::find($id);
        return view('pages.dashboard.message.message-type.message-type-edit', compact('message_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactSettings  $contactSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactSettings $contactSettings)
    {
        $contact_settings = ContactSettings::firstOrNew();
        $contact_settings->title = $request->title;
        $contact_settings->desc = $request->desc;
        $contact_settings->telegram = $request->telegram;
        $contact_settings->skype = $request->skype;
        $contact_settings->whatsapp = $request->whatsapp;
        $contact_settings->office_location = $request->office_location;
        $contact_settings->map_location = $request->map_location;


        $contact_settings->save();
        return redirect()->route('admin.contact')->with('success',"Data has been update successfully.");
    }

    public function updateMessage(Request $request, $id)
    {
        $message_type = MessageType::find($id);
        $message_type->topic = $request->topic;

        $message_type->save();

        return redirect()->route('admin.message-type.all')->with('success', 'Message Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactSettings  $contactSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message_type =  MessageType::find($id);
        $message_type->delete();

        return redirect()->route('admin.message-type.all')->with('success', 'Type Deleted successfully');
    }
}
