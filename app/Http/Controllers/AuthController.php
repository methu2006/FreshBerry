<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Very lightweight demo validation
        $data = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // In a real app, you would create a User in DB and hash the password.
        // Here we just store minimal user info in session for demo purposes.
        Session::put('user', [
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'customer',
        ]);

        return Redirect::to('/account')->with('status', 'Welcome, account created!');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Demo only: accept any credentials and "log in" the user.
        // Replace with database auth if needed.
        Session::put('user', [
            'name' => 'FreshBerry User',
            'email' => $data['email'],
            'role' => 'customer',
        ]);

        return Redirect::to('/account')->with('status', 'Logged in successfully');
    }

    public function logout(Request $request)
    {
        Session::forget('user');
        return Redirect::to('/')->with('status', 'Logged out');
    }

    public function account(Request $request)
    {
        $user = Session::get('user');
        if (!$user) {
            return Redirect::to('/login')->with('error', 'Please login first');
        }
        return view('account', ['user' => $user]);
    }
}
