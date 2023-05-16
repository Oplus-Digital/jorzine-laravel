<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReleaseController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::resource('articles',ArticleController::class);
Route::resource('bands',BandController::class);
Route::resource('interviews',InterviewController::class);
Route::resource('news',NewsController::class);
Route::resource('releases',ReleaseController::class);
Route::resource('reviews',ReviewController::class);

