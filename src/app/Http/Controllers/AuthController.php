<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Redirect to login page
    public function loginPage()
    {
        return view('index');
    }

    // Perform login operation
    public function login(Request $request)
    {

        // Send request to perform login
        $response = Http::post('https://dummyjson.com/auth/login', [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        // Handling if receive error response
        if ($response->failed()) {
            return redirect()->back()->withErrors(['error' => 'Invalid credentials.']);
        }

        $data = $response->json();

        // Store accessToken in session
        Session::put('token', $data['accessToken']);
        return redirect('/dashboard');
    }

    // Logout operation
    public function logout()
    {
        // Flush all sessions
        Session::flush();
        return redirect('/');
    }
}
