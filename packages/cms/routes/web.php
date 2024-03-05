<?php

use Hup234design\Cms\Http\Controllers\PageController;
use Hup234design\Cms\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'],function(){

    Route::controller(PostController::class)
//        ->prefix(app(\Hup234design\Cms\Settings\PostsSettings::class)->slug)
        ->prefix('posts')
        ->as('posts.')
        ->group(function () {
            Route::get('/{slug}', 'post')->name('post');
            Route::get('/', 'index')->name('index');
        });

    Route::controller(PageController::class)
        ->as('pages.')
        ->group(function () {
            Route::get('/{slug}', [PageController::class, 'page'])->name('page');
            Route::get('/', [PageController::class, 'home'])->name('home');
        });
});
