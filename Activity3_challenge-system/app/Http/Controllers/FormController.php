<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // SHOW FORM
    public function create()
    {
        return view('dashboard');
    }

    // HANDLE FORM SUBMISSION
    public function store(Request $request)
    {
        // 🟢 VALIDATION
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'age' => 'required|numeric|min:18',
            'category' => 'required',
            'difficulty' => 'required',
            'goal' => 'required|min:10',
        ]);

        // 🟢 CHALLENGE MATRIX (CATEGORY + DIFFICULTY)
        $challenges = [
            'coding' => [
                'easy' => [
                    "Create a simple HTML page 🧾",
                    "Print user input in PHP 🐘",
                    "Make a basic form layout 🎯"
                ],
                'medium' => [
                    "Build a CRUD system in Laravel 🧠",
                    "Create login + registration system 🔐",
                    "Validate a full form with rules ⚡"
                ],
                'hard' => [
                    "Build a mini REST API 🚀",
                    "Create authentication with middleware 🛡️",
                    "Develop a full MVC module 💻"
                ]
            ],

            'fitness' => [
                'easy' => [
                    "Do 10 push-ups 💪",
                    "Walk for 5 minutes 🚶",
                    "Stretch for 3 minutes 🧘"
                ],
                'medium' => [
                    "Do 25 squats 🦵",
                    "Jog for 10 minutes 🏃",
                    "Hold plank for 45 seconds ⏱️"
                ],
                'hard' => [
                    "Do 50 push-ups 💥",
                    "Run for 20 minutes 🏃‍♂️",
                    "Full body workout circuit 🔥"
                ]
            ],

            'study' => [
                'easy' => [
                    "Read 1 programming article 📖",
                    "Watch a 10-minute tutorial 🎥",
                    "Review basic notes ✏️"
                ],
                'medium' => [
                    "Study Laravel for 30 minutes 📚",
                    "Solve 10 coding problems 🧠",
                    "Take notes from tutorial 📓"
                ],
                'hard' => [
                    "Build a mini project 💻",
                    "Study advanced backend concepts ⚙️",
                    "Create your own system design 🏗️"
                ]
            ]
        ];

        // 🟢 GET INPUTS
        $category = $request->category;
        $difficulty = $request->difficulty;

        // 🟢 VALIDATION SAFETY CHECK
        if (!isset($challenges[$category][$difficulty])) {
            return back()->withErrors([
                'category' => 'Invalid category or difficulty selected'
            ]);
        }

        // 🟢 RANDOM PICK (CATEGORY + DIFFICULTY)
        $randomChallenge = $challenges[$category][$difficulty][array_rand($challenges[$category][$difficulty])];

        // 🟢 RETURN RESULT
        return redirect('/dashboard')->with([
            'success' => 'Challenge generated successfully!',
            'challenge' => $randomChallenge,
            'category' => $category,
            'difficulty' => $difficulty
        ]);
    }
}