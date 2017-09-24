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

Route::get('/', 'Pages@getIndex');
Route::get('gallery', 'Pages@getGallery');
Route::get('privacy-terms', 'Pages@getPrivacy_Terms');
Route::get('attribution', 'Pages@getAttribution'); 
