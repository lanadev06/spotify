<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('index');

        Route::get('category/{slug}', 'category')
            ->where('slug', '[a-z-]+');

        Route::get('artist/{id}', 'artist')
            ->where('id', '[0-9]+');

        Route::get('user/{id}', 'user')
            ->where('id', '[0-9]+');

        Route::get('album/{id}', 'album')
            ->where('id', '[0-9]+');

        Route::get('playlist/{slug}', 'playlist')
            ->where('slug');
    });
