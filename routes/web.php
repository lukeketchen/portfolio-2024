<?php

use App\Http\Controllers\ProfileController;
use App\Models\Article;
use App\Models\Project;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

/**
 * Project routes
 */
Route::get('/project/{id}', function ($id) {
    $model = Project::find($id);
    if ($model) {
        return Inertia::render('Project', [
            'projectId' => $id,
        ]);
    } else {
        return redirect()->route('home');
    }
})->name('project');


/**
 * Blog routes
 */
Route::get('/blog', function () {
    return Inertia::render('Blog');
})->name('blog');

Route::get('/article/{id}', function ($id) {
    $model = Article::find($id);
    if ($model) {
        return Inertia::render('Article', [
            'articleId' => $id,
        ]);
    } else {
        return redirect()->route('blog');
    }
})->name('article');


require __DIR__ . '/auth.php';
