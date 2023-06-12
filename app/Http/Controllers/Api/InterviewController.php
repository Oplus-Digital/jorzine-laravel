<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InterviewResource;
use App\Models\Interview;

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
