<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\BandResource;
use App\Models\Article;
use App\Models\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index()
    {
        return response()->json([
            'bands' => BandResource::collection(Band::all())
        ]);
    }

    public function show($id)
    {
        $band = Band::whereId($id)->first();

            return response()->json([
                'band' => new BandResource($band)
            ]);
    }
}
