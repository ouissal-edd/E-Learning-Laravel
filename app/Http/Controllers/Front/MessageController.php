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
            'email' => 'required|email|unique:newsletters',
        ]);

        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect()->back()->with('success', 'You have successfully subscribed to our newsletter.');
    }
}
