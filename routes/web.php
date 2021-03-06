<?php

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
    return view('pages.welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/gear', function () {
    return view('pages.gear');
});

Route::get('/repertoire', function () {
    return view('pages.repertoire');
});

Route::get('/blog', function () {
    return view('pages.blog');
});
