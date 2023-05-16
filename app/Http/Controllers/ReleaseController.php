<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\BandResource;
use App\Http\Resources\InterviewResource;
use App\Http\Resources\NewResource;
use App\Http\Resources\ReleaseResource;
use App\Models\Article;
use App\Models\Band;
use App\Models\Interview;
use App\Models\News;
use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function index()
    {
        return response()->json([
            'releases' => ReleaseResource::collection(Release::all())
        ]);
    }

    public function show($id)
    {
        $release = Release::whereId($id)->first();

            return response()->json([
                'release' => new ReleaseResource($release)
            ]);
    }
}
