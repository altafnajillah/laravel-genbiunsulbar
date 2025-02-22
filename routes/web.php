<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/member', function () {
    return view('member');
});

Route::get('/member/pengurus', function () {
    return view('pengurus');
})->name('pengurus');

Route::get('/member/demisioner', function () {
    return view('demisioner');
})->name('demisioner');

Route::get('/about', function () {
    return view('about');
});

Route::get('/scholarship', [\App\Http\Controllers\PublicController::class, 'scholarship']);

// Post Messages
Route::post('/message/send', [\App\Http\Controllers\PublicController::class, 'sendMessage']);
