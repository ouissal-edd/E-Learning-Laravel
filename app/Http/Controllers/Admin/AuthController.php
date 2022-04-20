<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // login
    public function login()
    {
        return view('admin.auth.login');
    }

    // login post
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:200',
            'password' => 'required|string',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }
}
