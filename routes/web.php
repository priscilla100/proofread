<?php
use App\UploadedFile;
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
Route::get('/upload', 'HomeController@upload');
Route::post('/handleUpload', 'HomeController@handleUpload');

Route::get('/uploaded', 'UploadedController@uploaded');
Route::get('/uploaded/{id}', 'UploadedController@download');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);


Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@profile_update');


Route::get('/change-password', 'PasswordController@index');
Route::post('/change-password', 'PasswordController@change-password');


//Route::get('/upload', 'UploadController@upload');
//Route::post('/handleupload', 'UploadController@handleupload');
//
//Route::post('handleUpload', 'FilesController@handleUpload');
//Route::get('upload', 'FilesController@upload');


//Route::get('/download', 'DownloadController@index');
//Route::post('/download', 'DownloadController@download');
