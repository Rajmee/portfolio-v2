<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message_list = Message::all();
        return view('pages.dashboard.message.message-all.message-all', compact('message_list'));
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
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'topic' => 'required',
            'appoint_date' => 'required',
            'message' => 'required',
        ]);
        $message_list = new Message;
        $message_list->name = $validatedData['name'];
        $message_list->email = $validatedData['email'];
        $message_list->topic = $validatedData['topic'];
        $message_list->appoint_date = $validatedData['appoint_date'];
        $message_list->message = $validatedData['message'];

        $message_list->save();

        // $response = new Response(['Your message has been send successfully!' => 'success'], 200);
        // return $response;

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been send successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message_details = Message::find($id);
        return view('pages.dashboard.message.message-all.message-view', compact('message_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
