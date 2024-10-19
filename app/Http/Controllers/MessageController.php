<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Display a listing of the messages
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    // Show the form for creating a new message
    public function create()
    {
        return view('messages.create');
    }

    // Store a newly created message in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    // Display the specified message
    public function show(Message $message)
    {
        return view('messages.show', compact('message'));
    }

    // Show the form for editing the specified message
    public function edit(Message $message)
    {
        return view('messages.edit', compact('message'));
    }

    // Update the specified message in storage
    public function update(Request $request, Message $message)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $message->update($request->all());

        return redirect()->route('messages.index')
            ->with('success', 'Message updated successfully.');
    }

    // Remove the specified message from storage
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index')
            ->with('success', 'Message deleted successfully.');
    }
}