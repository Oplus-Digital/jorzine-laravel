<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\BandController;
use App\Http\Controllers\Api\InterviewController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\ReleaseController;
use App\Http\Controllers\Api\ReviewController;
use Illuminate\Support\Facades\Route;


Route::resource('articles',ArticleController::class);
Route::resource('bands',BandController::class);
Route::resource('interviews',InterviewController::class);
Route::resource('news',NewsController::class);
Route::resource('releases',ReleaseController::class);
Route::resource('reviews',ReviewController::class);

Route::get('news_eastern',[NewsController::class,'news_eastern']);
Route::get('news_international',[NewsController::class,'news_international']);

