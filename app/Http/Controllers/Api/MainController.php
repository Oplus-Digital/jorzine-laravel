<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;

class MainController extends Controller
{
    public function getArticles()
    {
        return response()->json([
            'article' => ArticleResource::collection(Article::all())
        ]);
    }
}
