<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/sitemap', function () {
    Sitemap::create()
        ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY))
        ->add(Url::create('/contact'))
        ->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated!';
});