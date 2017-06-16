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
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/master', function () {
    return view('layouts.homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/upload', 'UploadController@index');
//Route::post('/store', 'UploadController@store');
//Route::post('/show', 'UploadController@show');
//Route::get('upload/get/{upload}', 'UploadController@get');
//Route::post('upload/add', 'UploadController@add');


Route::get('/upload', 'HomepageController@index');
Route::post('/upload', 'UploadController@upload');


Route::get('/download', 'DownloadController@index');
Route::post('/download', 'DownloadController@download');
