<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InterviewController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ReviewController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('main');
    Route::resources([

        'admins' => AdminController::class,
        'news' => NewsController::class,
        'articles' => ArticleController::class,
        'reviews' => ReviewController::class,
        'interviews' => InterviewController::class,
    ]);

});


//require __DIR__.'/auth.php';
