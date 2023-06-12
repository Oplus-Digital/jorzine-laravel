<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BandResource;
use App\Models\Band;

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
