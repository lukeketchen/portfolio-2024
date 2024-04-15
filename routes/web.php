<?php

use App\Http\Controllers\ProfileController;
use App\Models\Article;
use App\Models\Project;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'loggedIn' => Route::has('login'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

/**
 * Admin routes
 */
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/projects', function () {
    return Inertia::render('Projects');
})->middleware(['auth', 'verified'])->name('admin_projects');

Route::get('/admin/project/{id}', function ($id) {
    return Inertia::render('AdminProject', ['projectId' => $id]);
})->middleware(['auth', 'verified'])->name('admin_project');

Route::get('/admin/articles', function () {
    return Inertia::render('Articles');
})->middleware(['auth', 'verified'])->name('admin_articles');

/**
 * Authenticated user routes
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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
