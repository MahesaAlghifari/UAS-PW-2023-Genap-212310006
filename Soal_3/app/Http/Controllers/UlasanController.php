<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'review' => 'required|integer',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')
            ->with('success', 'Review added successfully.');
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'review' => 'required|integer',
        ]);

        $review->update($request->all());

        return redirect()->route('reviews.index')
            ->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')
            ->with('success', 'Review deleted successfully.');
    }
}
