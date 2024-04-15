<?php

use App\Http\Controllers\Api\V1\Admin\AdminProjectsController;
use App\Http\Controllers\Api\V1\ArticleController;
use App\Http\Controllers\Api\V1\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1'], function () {
    Route::resource('/projects', ProjectController::class);
    Route::resource('/articles', ArticleController::class);

    Route::group(['prefix' => '/admin'], function () {
//        Route::resource('/projects', AdminProjectsController::class);
        Route::resource('/admin-projects', AdminProjectsController::class);

//    })->middleware('auth:api');
    })->middleware('auth:sanctum');

//        Route::middleware('auth:sanctum')->group(function () {
//            Route::resource('/admin-projects', AdminProjectsController::class);
//        });
//    });

//    Route::resource('/admin/projects', AdminProjectsController::class);
});

