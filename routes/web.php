<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello/{name?}', function (?string $name = null) {
    return view('welcome', ['name' => $name]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact', [
        'github' => 'https://github.com/Naufal0620',
        'instagram' => 'https://instagram.com/to_nausad',
        'email' => 'mailto:naufal@mail.com',
    ]);
});