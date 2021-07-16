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

Route::get('/inputgaleriupt', 'AdminController@inputgaleriupt')->name('inputgaleriupt');
Route::post('/simpan-galeriupt', 'AdminController@store4')->name('simpan-galeriupt');
Route::get('/showgaleriupt', 'AdminController@showgaleriupt')->name('showgaleriupt');

Route::post('/update-galeriupt/{id}', 'AdminController@update4')->name('update-galeriupt');
Route::get('/view4/{id}', 'AdminController@view4');
Route::get('/destroy4/{id}', 'AdminController@destroy4')->name('delete-galeriupt');


//Data Ekonomi
Route::get('/inputpotensiekonomi1', 'AdminController@inputpotensiekonomi1')->name('inputpotensiekonomi1');
Route::post('/simpan-potensiekonomi1', 'AdminController@store5')->name('simpan-potensiekonomi1');
Route::get('/showpotensiekonomi1', 'AdminController@showpotensiekonomi1')->name('showpotensiekonomi1');

Route::post('/update-potensiekonomi1/{id}', 'AdminController@update5')->name('update-potensiekonomi1');
Route::get('/view5/{id}', 'AdminController@view5');




Route::resource('peraturans', PeraturanController::class);

Route::get('/inputidentitas', 'DataUmumController@inputidentitas')->name('inputidentitas');
Route::post('/simpan-identitas', 'DataUmumController@storeidentitas')->name('simpan-identitas');
Route::get('/show-dataumum', 'DataUmumController@index')->name('show-dataumum');
Route::post('/update-identitas/{id}', 'DataUmumController@updateidentitas')->name('update-identitas');
Route::get('/viewidentitas/{id}', 'DataUmumController@viewidentitas');

Route::get('/homes', 'DataUmumController@home')->name('homes');
Route::get('/kepalakphs', 'DataUmumController@kepalakph')->name('kepalakphs');
Route::get('/fasilitass', 'DataUmumController@fasilitas')->name('fasilitass');
Route::get('/lembagas', 'DataUmumController@lembaga')->name('lembagas');
Route::get('/rphjps', 'DataUmumController@rphjp')->name('rphjps');


//ekologi
Route::get('/inputekologi', 'AdminController@inputekologi')->name('inputekologi');
Route::post('/simpan-ekologi', 'AdminController@storeekologi')->name('simpan-ekologi');
Route::get('/showekologi', 'AdminController@showekologi')->name('showekologi');

Route::post('/update-ekologi/{id}', 'AdminController@updateekologi')->name('update-ekologi');
Route::get('/viewekologi/{id}', 'AdminController@viewekologi');

//ekologi2
Route::get('/inputekologi2', 'AdminController@inputekologi2')->name('inputekologi2');
Route::post('/simpan-ekologi2', 'AdminController@storeekologi2')->name('simpan-ekologi2');
Route::get('/showekologi2', 'AdminController@showekologi2')->name('showekologi2');

Route::post('/update-ekologi2/{id}', 'AdminController@updateekologi2')->name('update-ekologi2');
Route::get('/viewekologi2/{id}', 'AdminController@viewekologi2');

//ekologi3
Route::get('/inputekologi3', 'AdminController@inputekologi3')->name('inputekologi3');
Route::post('/simpan-ekologi3', 'AdminController@storeekologi3')->name('simpan-ekologi3');
Route::get('/showekologi3', 'AdminController@showekologi3')->name('showekologi3');

Route::post('/update-ekologi3/{id}', 'AdminController@updateekologi3')->name('update-ekologi3');
Route::get('/viewekologi3/{id}', 'AdminController@viewekologi3');

//ekologi4
Route::get('/inputekologi4', 'AdminController@inputekologi4')->name('inputekologi4');
Route::post('/simpan-ekologi4', 'AdminController@storeekologi4')->name('simpan-ekologi4');
Route::get('/showekologi4', 'AdminController@showekologi4')->name('showekologi4');

Route::post('/update-ekologi4/{id}', 'AdminController@updateekologi4')->name('update-ekologi4');
Route::get('/viewekologi4/{id}', 'AdminController@viewekologi4');