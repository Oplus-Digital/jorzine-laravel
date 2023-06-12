<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewResource;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return response()->json([
            'news' => NewResource::collection(News::latest('date')->get())
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
