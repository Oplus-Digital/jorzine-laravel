<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getArticles()
    {
        return response()->json([
            'article' => ArticleResource::collection(Article::all())
        ]);
    }
}
