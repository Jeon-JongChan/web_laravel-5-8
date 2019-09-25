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
    return view('index');
});
Route::get('/archive', function () {
    return view('archive');
});
Route::get('/archive/list/all', function () {
    return view('archive-list');
});
Route::get('/archive/episode', function () {
    return view('archive-episode');
});