<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return response()->json([
            'reviews' => ReviewResource::collection(Review::latest('date')->get())
        ]);
    }

    public function show($id)
    {
        $review = Review::whereId($id)->first();

            return response()->json([
                'review' => new ReviewResource($review)
            ]);
    }
}
