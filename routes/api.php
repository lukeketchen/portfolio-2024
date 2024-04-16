<?php

use App\Http\Controllers\Api\V1\Admin\AdminProjectsController;
use App\Http\Controllers\Api\V1\ArticleController;
use App\Http\Controllers\Api\V1\ForecastController;
use App\Http\Controllers\Api\V1\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1'], function () {
    
    /**
     * Open Routes
     */
    Route::resource('/articles', ArticleController::class);
    Route::resource('/forecasts', ForecastController::class);
    Route::resource('/projects', ProjectController::class);

    /**
     * Admin Routes
     */
    Route::group(['prefix' => '/admin'], function () {
        Route::resource('/admin-projects', AdminProjectsController::class);
    })->middleware('auth:sanctum');

});

