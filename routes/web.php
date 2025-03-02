<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

// News Route
Route::get('/news', [PublicController::class, 'news']);

Route::get('/news/{id}', [PublicController::class, 'showNews'])->name('showNews');

// Gallery Route
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/gallery/hello', function () {
    return view('show.gallery');
});

// Pengurus dan Demisioner Route
Route::get('/member', function () {
    return redirect('/member/pengurus');
});

Route::get('/member/pengurus', function () {
    return view('members.pengurus');
})->name('pengurus');

Route::get('/member/demisioner', [PublicController::class, 'getDemisioners'])->name('demisioner');

// Beasiswa Route
Route::get('/scholarship', [PublicController::class, 'scholarship']);
Route::get('/pendaftaran', [PublicController::class, 'pendaftaran']);

// Post Messages
Route::post('/message/send', [PublicController::class, 'sendMessage']);
