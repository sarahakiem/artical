<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;


class ContactController extends Controller
{
    public function contactMail(){
        return view('public.contact');
    }
    public function sendEmail(Request $request){
      $data= $request->except('_token');
      Mail::to('saraamer@gmail.com')->send(new contactMail($data));
      return "massege send succesfuly";
    }

    //view to blade to add message
    public function createMessage(){
        return view('admin.add_contactMessage');
    }


    //store messages from contact form recieved to mailtrap to database using admin blade with a form
    
    public function store(Request $request)
    {
        
        $data= $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'read' => 'boolean',
        ]);

        Message::create($data);

        // Redirect or provide feedback
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function index(){

        $unreadMessages = Message::where('read', false)->get();
        $readMessages = Message::where('read', true)->get();

        return view('admin.messages', compact('unreadMessages', 'readMessages'));
    }
    public function show($id)
    {
        $message = Message::findOrFail($id);

        if ($message) {
            $message->update(['is_read' => true]); 
        }

        return view('admin.message_details', compact('message'));
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
