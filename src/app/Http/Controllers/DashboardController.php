<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch authenticated user data
        $user = Http::withToken(Session::get('token'))->get('https://dummyjson.com/auth/me')->json();

        // Fetch products data
        $products = Http::get('https://dummyjson.com/products')->json()['products'];

        return view('dashboard', compact('user', 'products'));
    }
}
