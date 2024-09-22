<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactMail()
    {
        return view('public.pages.contact');
    }

    //store messages from contact form to mailtrap to and database

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'read' => 'boolean',
        ]);

        Contact::create($data);
        //send to mailtrap
        Mail::to('saraamer@gmail.com')->send(new contactMail($data));

        return redirect()->back();
    }

    public function index()
    {

        $unreadMessages = Contact::where('read', false)->get();
        $readMessages = Contact::where('read', true)->get();

        return view('admin.pages.messages', compact('unreadMessages', 'readMessages'));
    }
    public function show($id)
    {
        $message = Contact::findOrFail($id);

        return view('admin.pages.message_details', compact('message'));
    }

    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return redirect()->back();
    }
    //mark as read
    public function markAsRead($id)
    {
        $message = Contact::findOrFail($id);
        $message->update(['read' => 1]);

        return redirect()->back();
    }

}
