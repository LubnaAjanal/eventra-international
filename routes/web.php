<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('website/layouts/index');
// });

Route::get('/', function () {
    return view('admin/layouts/main');
})->name('admin');

Route::get('/website-register', function () {
    return view('welcome');
});

