<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviews()
    {
        return view('main.reviews');
    }
    public function getReviews(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:3|max:25',
            'message' =>'required|min:3|max:255',
        ]);
        return back()->with('success', 'Thank you for Review');
    }
    
}
