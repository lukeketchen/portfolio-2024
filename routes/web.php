<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/project/{id}', function ($id) {

    // TODO - Add an if exists project check here

    return Inertia::render('Project', [
        'projectId' => $id,
    ]);
})->name('project');


require __DIR__ . '/auth.php';
