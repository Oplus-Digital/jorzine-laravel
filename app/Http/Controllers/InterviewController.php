<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\BandResource;
use App\Http\Resources\InterviewResource;
use App\Models\Article;
use App\Models\Band;
use App\Models\Interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function index()
    {
        return response()->json([
            'interviews' => InterviewResource::collection(Interview::all())
        ]);
    }

    public function show($id)
    {
        $interview = Interview::whereId($id)->first();

            return response()->json([
                'interview' => new InterviewResource($interview)
            ]);
    }
}
