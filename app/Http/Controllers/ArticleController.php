<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return response()->json([
            'article' => ArticleResource::collection(Article::all())
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
