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

Route::get('/about', function () {
    return view('about');
});

Route::get('/scholarship', function () {
    return view('scholarship');
});
