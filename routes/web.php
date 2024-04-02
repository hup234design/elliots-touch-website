<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(EventController::class)
    ->prefix(cmsSetting('events_slug', 'events'))
    ->as('events.')
    ->group(function () {
        Route::get('/{slug}', 'event')->name('event');
        Route::get('/', 'index')->name('index');
    });

Route::controller(PostController::class)
    ->prefix(cmsSetting('posts_slug', 'posts'))
    ->as('posts.')
    ->group(function () {
        Route::get('/{slug}', 'post')->name('post');
        Route::get('/', 'index')->name('index');
    });

Route::controller(PageController::class)
    ->as('pages.')
    ->group(function () {
        Route::get('/{pageSlug}/{slug}', 'subpage')->name('subpage');
        Route::get('/{slug}', 'page')->name('page');
        Route::get('/', 'home')->name('home');
    });
