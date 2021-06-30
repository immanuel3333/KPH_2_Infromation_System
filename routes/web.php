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

Auth::routes(['verify' => true]);
Route::get('/landingpage', 'HomeController@banner')->name('landingpage');
Route::get('/sejarah', 'HomeController@sejarah');
Route::get('/strukturorg', 'HomeController@strukturorg')->name('strukturorg');
Route::get('/profilpegawai', 'HomeController@profilpegawai');
Route::get('/', 'PostController@index');
Route::post('/comment', 'PostController@comment');
Route::get('/home', 'AdminController@home')->name('home');
Route::get('/home/{id}/delete', 'AdminController@delete');

Route::post('/inputvisimisi', 'AdminController@inputvisimisi')->name('inputvisimisi');
Route::get('/showvisimisi', 'AdminController@showvisimisi')->name('showvisimisi');





