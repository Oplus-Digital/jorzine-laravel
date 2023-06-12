<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return response()->json([
            'article' => ArticleResource::collection(Article::latest('date')->get())
        ]);
    }

    public function show($id)
    {
        $article = Article::whereId($id)->first();

            return response()->json([
                'article' => new ArticleResource($article)
            ]);
    }
}
