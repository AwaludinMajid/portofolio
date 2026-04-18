<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projects/warung-es-kelapa', function () {
    return view('projects.warung-es-kelapa');
});

Route::get('/projects/pantau-cuaca', function () {
    return view('projects.pantau-cuaca');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Routes untuk melihat pesan (sementara tanpa auth untuk kemudahan testing)
Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages.index');
Route::get('/admin/messages/{id}', [ContactController::class, 'show'])->name('admin.messages.show');
Route::post('/admin/messages/{id}/mark-read', [ContactController::class, 'markAsRead'])->name('admin.messages.mark-read');

