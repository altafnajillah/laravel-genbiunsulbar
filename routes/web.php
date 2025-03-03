<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

// News Route
Route::get('/news', [PublicController::class, 'news']);

Route::get('/news/{id}', [PublicController::class, 'showNews'])->name('showNews');

// Gallery Route
Route::get('/gallery', [PublicController::class, 'gallery']);

Route::get('/gallery/{id}', [PublicController::class, 'showGallery'])->name('showGallery');

// Pengurus dan Demisioner Route
Route::get('/member', function () {
    return redirect('/member/pengurus');
});

Route::get('/member/pengurus', [PublicController::class, 'getMembers'])->name('pengurus');

Route::get('/member/demisioner', [PublicController::class, 'getDemisioners'])->name('demisioner');

// Beasiswa Route
Route::get('/scholarship', [PublicController::class, 'scholarship']);
Route::get('/pendaftaran', [PublicController::class, 'pendaftaran']);

// Post Messages
Route::post('/message/send', [PublicController::class, 'sendMessage']);
