<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $links = config('links');
    return view('home', ['links'=>$links]);
})->name('home');

Route::get('/characters', function () {
    $links = config('links');
    return view('characters', ['links'=>$links]);
})->name('characters');

Route::get('/comics', function () {
    $links = config('links');
    return view('comics', ['links'=>$links]);
})->name('comics');

Route::get('/partials/header', function () {
    $links = config('links');
    return view('header', ['links'=>$links]);
})->name('header');