<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');