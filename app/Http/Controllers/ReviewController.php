<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addReview(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'comment' => 'required|string|max:1000',
            'rating' => 'required|integer|between:1,5', // Giả sử rating là từ 1 đến 5
        ]);

        Review::create([
            'room_id' => $id,
            'user_id' => $request->user_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->route('rooms.detail', $id)->with('success', 'Review added successfully.');
    }
}
