<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\BandResource;
use App\Http\Resources\InterviewResource;
use App\Http\Resources\NewResource;
use App\Models\Article;
use App\Models\Band;
use App\Models\Interview;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return response()->json([
            'news' => NewResource::collection(News::all())
        ]);
    }

    public function show($id)
    {
        $new = News::whereId($id)->first();

            return response()->json([
                'new' => new NewResource($new)
            ]);
    }

    public function news_eastern()
    {
        return response()->json([
            'news' => NewResource::collection(News::whereSectionName('Mid-Eastern Metal News')->get())
        ]);
    }

    public function news_international()
    {
        return response()->json([
            'news' => NewResource::collection(News::whereSectionName('International Metal News')->get())
        ]);
    }
}
