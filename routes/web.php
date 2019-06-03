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
    return view('main.home');
});

Route::get('/plans', function () {
    return view('content.plans');
});

Route::get('/calendar', function () {
    return view('content.calendar');
});

Route::get('/progress', function () {
    return view('content.progress');
});

Route::get('/blog', function () {
    return view('content.blog');
});

Route::get('/links', function () {
    return view('content.links');
});

Route::get('/awards', function () {
    return view('content.awards');
});
