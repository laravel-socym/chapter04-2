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
    return view('welcome');
});

Route::get('/plain', \App\Http\Controllers\PlainTextAction::class);
Route::get('/blade', \App\Http\Controllers\BladeAction::class);
Route::get('/download', \App\Http\Controllers\DownloadAction::class);
Route::get('/json', \App\Http\Controllers\JsonAction::class);
Route::get('/jsonp', \App\Http\Controllers\JsonpAction::class);
Route::get('/media', \App\Http\Controllers\MediaAction::class);
Route::get('/sse', \App\Http\Controllers\StreamAction::class);
Route::get('/payload', \App\Http\Controllers\ArticlePayloadAction::class);
