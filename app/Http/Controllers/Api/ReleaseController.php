<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReleaseResource;
use App\Models\Release;

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
