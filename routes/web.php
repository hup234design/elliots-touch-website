<?php

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

Route::controller(\App\Http\Controllers\EventController::class)
    ->prefix(cmsSetting('events_slug', 'events'))
    ->as('events.')
    ->group(function () {
        Route::get('/{slug}', 'event')->name('event');
        Route::get('/', 'index')->name('index');
    });
