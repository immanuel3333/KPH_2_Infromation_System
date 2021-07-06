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

Route::get('/inputvisimisi', 'AdminController@inputvisimisi')->name('inputvisimisi');
Route::post('/simpan-visimisi', 'AdminController@store')->name('simpan-visimisi');
Route::get('/showvisimisi', 'AdminController@showvisimisi')->name('showvisimisi');

Route::post('/update-visimisi/{id}', 'AdminController@update1')->name('update-visimisi');
Route::get('/view1/{id}', 'AdminController@view1');


Route::get('/inputtugasfungsi', 'AdminController@inputtugasfungsi')->name('inputtugasfungsi');
Route::post('/simpan-tugasfungsi', 'AdminController@store2')->name('simpan-tugasfungsi');
Route::get('/showtugasfungsi', 'AdminController@showtugasfungsi')->name('showtugasfungsi');

Route::post('/update-tugasfungsi/{id}', 'AdminController@update2')->name('update-tugasfungsi');
Route::get('/view2/{id}', 'AdminController@view2');


Route::get('/inputsejarah', 'AdminController@inputsejarah')->name('inputsejarah');
Route::post('/simpan-sejarah', 'AdminController@store3')->name('simpan-sejarah');
Route::get('/showsejarah', 'AdminController@showsejarah')->name('showsejarah');

Route::post('/update-sejarah/{id}', 'AdminController@update3')->name('update-sejarah');
Route::get('/view3/{id}', 'AdminController@view3');


Route::resource('strukturs', StrukturController::class);


