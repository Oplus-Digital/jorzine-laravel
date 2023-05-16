<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\BandResource;
use App\Http\Resources\InterviewResource;
use App\Http\Resources\NewResource;
use App\Http\Resources\ReleaseResource;
use App\Http\Resources\ReviewResource;
use App\Models\Article;
use App\Models\Band;
use App\Models\Interview;
use App\Models\News;
use App\Models\Release;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return response()->json([
            'reviews' => ReviewResource::collection(Review::all())
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
