<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use PHPMailer\PHPMailer;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $validateData = $request->validate([
            'name'=> 'required',
            'email'=> 'required'
        ]);

        //create new message
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;

        //save message
        $message->save();

        //redirect
        return redirect('/')->with('success', 'Message Sent!');
    }

    public function getMessage(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }
}
