<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        // ✔ Logged-in user
        $user = auth()->user();

        // ✔ Users from database (your API source)
        $users = User::all();

        // ✔ Public API (JSONPlaceholder)
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        $posts = [];

        if ($response->successful()) {
            $posts = $response->json();
        }

        return view('dashboard', compact('user', 'users', 'posts'));
    }
}