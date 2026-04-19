<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Models\ContactMessage;

Route::get('/', function (Request $request) {
    if (
        $request->query('name') &&
        $request->query('email') &&
        $request->query('subject') &&
        $request->query('message')
    ) {
        ContactMessage::create([
            'name' => $request->query('name'),
            'email' => $request->query('email'),
            'subject' => $request->query('subject'),
            'message' => $request->query('message'),
        ]);

        return redirect('/')->with('success', 'Pesan berhasil dikirim.');
    }

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
Route::match(['get', 'post'], '/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin routes
Route::get('/admin/gallery', [GalleryController::class, 'adminIndex'])->name('admin.gallery.index');
Route::post('/admin/gallery/upload', [GalleryController::class, 'upload'])->name('admin.gallery.upload');

// Routes untuk melihat pesan (sementara tanpa auth untuk kemudahan testing)
Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages.index');
Route::get('/admin/messages/{id}', [ContactController::class, 'show'])->name('admin.messages.show');
Route::post('/admin/messages/{id}/mark-read', [ContactController::class, 'markAsRead'])->name('admin.messages.mark-read');

