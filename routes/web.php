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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PagesController@welcome');

Route::get('about','PagesController@about');

Route::get('EntryForm','PagesController@EntryForm');
Route::get('EntryFormError','PagesController@EntryFormError');
Route::post('ConfirmForm','PagesController@ConfirmForm');
Route::post('CompleteForm','PagesController@CompleteForm');
