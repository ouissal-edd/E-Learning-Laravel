<?php

namespace App\Http\Controllers\Front;
use App\Models\Newsletter;
use App\Models\Message;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters|max:200',
        ]);

        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect()->back()->with('success', 'You have successfully subscribed to our newsletter.');
    }

    public function message(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'message' => 'required|max:200',
            'subject' => 'max:200',
        ]);

        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->subject = $request->subject;
        $message->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }


}
