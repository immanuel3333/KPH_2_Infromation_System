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


Route::get('/',function(){
    return redirect('login');
});

Route::get('login', 'AuthController@index')->name('login');
Route::post('proses_login', 'AuthController@proses_login')->name('proses_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::get('/inputartikel', 'HomeController@inputartikel')->name('inputartikel');
Route::get('/indexartikel', 'HomeController@article')->name('indexartikel');
Route::post('/simpan-artikel', 'HomeController@storeartikel')->name('simpan-artikel');
Route::get('/showartikel/{id}', 'HomeController@showartikel');
Route::get('/get-artikel/{id}', 'HomeController@getartikel')->name('get-artikel');
Route::post('/update-artikel/{id}', 'HomeController@updateartikel')->name('update-artikel');
Route::get('/viewartikel/{id}', 'HomeController@viewartikel');

Route::get('/landingpage', 'HomeController@banner')->name('landingpage');
Route::get('/profilpegawai', 'HomeController@profilpegawai');
Route::get('/tes', 'PostController@index');
Route::post('/comment', 'PostController@comment');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['ceklogin:adminupt']], function(){
        Route::get('home', 'AdminController@home')->name('home');
        Route::get('/home/{id}/delete', 'AdminController@delete');

        //VISIMISI
        Route::get('/inputvisimisi', 'AdminController@inputvisimisi')->name('inputvisimisi');
        Route::post('/simpan-visimisi', 'AdminController@store')->name('simpan-visimisi');
        Route::get('/showvisimisi', 'AdminController@showvisimisi')->name('showvisimisi');

        Route::post('/update-visimisi/{id}', 'AdminController@update1')->name('update-visimisi');
        Route::get('/view1/{id}', 'AdminController@view1');

        //TUGAS FUNGSI
        Route::get('/inputtugasfungsi', 'AdminController@inputtugasfungsi')->name('inputtugasfungsi');
        Route::post('/simpan-tugasfungsi', 'AdminController@store2')->name('simpan-tugasfungsi');
        Route::get('/showtugasfungsi', 'AdminController@showtugasfungsi')->name('showtugasfungsi');

        Route::post('/update-tugasfungsi/{id}', 'AdminController@update2')->name('update-tugasfungsi');
        Route::get('/view2/{id}', 'AdminController@view2');

        //SEJARAH
        Route::get('/inputsejarah', 'AdminController@inputsejarah')->name('inputsejarah');
        Route::post('/simpan-sejarah', 'AdminController@store3')->name('simpan-sejarah');
        Route::get('/showsejarah', 'AdminController@showsejarah')->name('showsejarah');

        Route::post('/update-sejarah/{id}', 'AdminController@update3')->name('update-sejarah');
        Route::get('/view3/{id}', 'AdminController@view3');

        //STRUKTUR
        Route::resource('strukturs', StrukturController::class);

        //Galeri UPT
        Route::get('/inputgaleriupt', 'AdminController@inputgaleriupt')->name('inputgaleriupt');
        Route::post('/simpan-galeriupt', 'AdminController@store4')->name('simpan-galeriupt');
        Route::get('/showgaleriupt', 'AdminController@showgaleriupt')->name('showgaleriupt');

        Route::post('/update-galeriupt/{id}', 'AdminController@update4')->name('update-galeriupt');
        Route::get('/view4/{id}', 'AdminController@view4');
        Route::get('/destroy4/{id}', 'AdminController@destroy4')->name('delete-galeriupt');


        Route::get('/inputperaturan', 'PeraturanController@inputperaturan')->name('inputperaturan');
        Route::post('/simpan-peraturan', 'PeraturanController@storeperaturan')->name('simpan-peraturan');
        Route::post('/update-peraturan/{id}', 'PeraturanController@updateperaturan')->name('update-peraturan');
        Route::post('/destroyperaturan/{id}', 'PeraturanController@destroy')->name('delete-peraturan');
        Route::get('/peraturan', 'PeraturanController@viewperaturan1');
        Route::get('/viewperaturan12/{id}', 'PeraturanController@viewperaturan12');
        Route::get('/peraturans', 'PeraturanController@peraturan')->name('peraturans');

        //data umum
        Route::get('/inputidentitas', 'DataUmumController@inputidentitas')->name('inputidentitas');
        Route::post('/simpan-identitas', 'DataUmumController@storeidentitas')->name('simpan-identitas');
        Route::get('/show-dataumum', 'DataUmumController@index')->name('show-dataumum');
        Route::post('/update-identitas/{id}', 'DataUmumController@updateidentitas')->name('update-identitas');
        Route::get('/viewidentitas/{id}', 'DataUmumController@viewidentitas');

        Route::get('/inputkepalakph', 'DataUmumController@inputkepalakph')->name('inputkepalakph');
        Route::post('/simpan-kepalakph', 'DataUmumController@storekepalakph')->name('simpan-kepalakph');
        Route::post('/update-kepalakph/{id}', 'DataUmumController@updatekepalakph')->name('update-kepalakph');
        Route::get('/viewkepalakph/{id}', 'DataUmumController@viewkepalakph');

        Route::get('/inputrphjp', 'DataUmumController@inputrphjp')->name('inputrphjp');
        Route::post('/simpan-rphjp', 'DataUmumController@storerphjp')->name('simpan-rphjp');
        Route::post('/update-rphjp/{id}', 'DataUmumController@updaterphjp')->name('update-rphjp');
        Route::get('/viewrphjp/{id}', 'DataUmumController@viewrphjp');

        Route::get('/inputlembaga', 'DataUmumController@inputlembaga')->name('inputlembaga');
        Route::post('/simpan-lembaga', 'DataUmumController@storelembaga')->name('simpan-lembaga');
        Route::post('/update-lembaga/{id}', 'DataUmumController@updatelembaga')->name('update-lembaga');
        Route::get('/viewlembaga/{id}', 'DataUmumController@viewlembaga');

        Route::get('/inputfasilitas', 'DataUmumController@inputfasilitas')->name('inputfasilitas');
        Route::post('/simpan-fasilitas', 'DataUmumController@storefasilitas')->name('simpan-fasilitas');
        Route::post('/update-fasilitas/{id}', 'DataUmumController@updatefasilitas')->name('update-fasilitas');
        Route::get('/destroyfasilitas/{id}', 'DataUmumController@destroyfasilitas')->name('delete-fasilitas');
        Route::get('/fasilitas', 'DataUmumController@viewfasilitas1');
        Route::get('/viewfasilitas12/{id}', 'DataUmumController@viewfasilitas12');

        Route::get('/identitas', 'DataUmumController@identitas')->name('homes');
        Route::get('/kepalakph', 'DataUmumController@kepalakph')->name('kepalakph');
        Route::get('/fasilitas', 'DataUmumController@fasilitas')->name('fasilitass');
        Route::get('/lembaga', 'DataUmumController@lembaga')->name('lembagas');
        Route::get('/rphjp', 'DataUmumController@rphjp')->name('rphjps');

       //JasaLingkungan1
        Route::get('/inputjasalingkungan1', 'EkonomiController@inputjasalingkungan1')->name('inputjasalingkungan1');
        Route::post('/simpan-jasalingkungan1', 'EkonomiController@store6')->name('simpan-jasalingkungan1');
        Route::get('/showjasalingkungan1', 'EkonomiController@showjasalingkungan1')->name('showjasalingkungan1');

        Route::post('/update-jasalingkungan1/{id}', 'EkonomiController@update6')->name('update-jasalingkungan1');
        Route::get('/destroy4/{id}', 'EkonomiController@destroy4')->name('delete-galeriupt');
        Route::get('/jasalingkungan1', 'EkonomiController@view6');
        Route::get('/view65/{id}', 'EkonomiController@view65');
        Route::get('/delete2/{id}', 'EkonomiController@delete2');

        //JasaLingkungan2
        Route::get('/inputjasalingkungan2', 'EkonomiController@inputjasalingkungan2')->name('inputjasalingkungan2');
        Route::post('/simpan-jasalingkungan2', 'EkonomiController@store62')->name('simpan-jasalingkungan2');
        Route::get('/showjasalingkungan2', 'EkonomiController@showjasalingkungan2')->name('showjasalingkungan2');

        Route::post('/update-jasalingkungan2/{id}', 'EkonomiController@update62')->name('update-jasalingkungan2');
        Route::get('/destroy42/{id}', 'EkonomiController@destroy42')->name('delete-galeriupt');
        Route::get('/jasalingkungan2', 'EkonomiController@view62');
        Route::get('/view652/{id}', 'EkonomiController@view652');
        Route::get('/delete22/{id}', 'EkonomiController@delete22');

        //JasaLingkungan3
        Route::get('/inputjasalingkungan3', 'EkonomiController@inputjasalingkungan3')->name('inputjasalingkungan3');
        Route::post('/simpan-jasalingkungan3', 'EkonomiController@store63')->name('simpan-jasalingkungan3');
        Route::get('/showjasalingkungan3', 'EkonomiController@showjasalingkungan3')->name('showjasalingkungan3');

        Route::post('/update-jasalingkungan3/{id}', 'EkonomiController@update63')->name('update-jasalingkungan3');
        Route::get('/destroy43/{id}', 'EkonomiController@destroy43')->name('delete-galeriupt');
        Route::get('/jasalingkungan3', 'EkonomiController@view63');
        Route::get('/view653/{id}', 'EkonomiController@view653');
        Route::get('/delete23/{id}', 'EkonomiController@delete23');


        //JasaLingkungan4
        Route::get('/inputjasalingkungan4', 'EkonomiController@inputjasalingkungan4')->name('inputjasalingkungan4');
        Route::post('/simpan-jasalingkungan4', 'EkonomiController@store64')->name('simpan-jasalingkungan4');
        Route::get('/showjasalingkungan4', 'EkonomiController@showjasalingkungan4')->name('showjasalingkungan4');

        Route::post('/update-jasalingkungan4/{id}', 'EkonomiController@update64')->name('update-jasalingkungan4');
        Route::get('/destroy44/{id}', 'EkonomiController@destroy44')->name('delete-galeriupt');
        Route::get('/jasalingkungan4', 'EkonomiController@view64');
        Route::get('/view654/{id}', 'EkonomiController@view654');
        Route::get('/delete24/{id}', 'EkonomiController@delete24');

        //sdm1
        Route::get('/inputsdm1', 'AdminController@inputsdm1')->name('inputsdm1');
        Route::post('/simpan-sdm1', 'AdminController@storesdm1')->name('simpan-sdm1');
        Route::get('/showsdm1', 'AdminController@showsdm1')->name('showsdm1');
        Route::get('/ajaxekonomi1', 'AdminController@ajaxekonomi1')->name('ajaxekonomi1');

        Route::post('/update-sdm1/{id}', 'AdminController@updatesdm1')->name('update-sdm1');
        Route::get('/viewsdm1/{id}', 'AdminController@viewsdm1');

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

       //dataumum2
        Route::get('/inputidentitas2', 'DataUmumController@inputidentitas2')->name('inputidentitas2');
        Route::post('/simpan-identitas2', 'DataUmumController@storeidentitas2')->name('simpan-identitas2');
        Route::get('/show-dataumum2', 'DataUmumController@index2')->name('show-dataumum2');
        Route::post('/update-identitas2/{id}', 'DataUmumController@updateidentitas2')->name('update-identitas2');
        Route::get('/viewidentitas2/{id}', 'DataUmumController@viewidentitas2');

        Route::get('/inputkepalakph2', 'DataUmumController@inputkepalakph2')->name('inputkepalakph2');
        Route::post('/simpan-kepalakph2', 'DataUmumController@storekepalakph2')->name('simpan-kepalakph2');
        Route::post('/update-kepalakph2/{id}', 'DataUmumController@updatekepalakph2')->name('update-kepalakph2');
        Route::get('/viewkepalakph2/{id}', 'DataUmumController@viewkepalakph2');

        Route::get('/inputlembaga2', 'DataUmumController@inputlembaga2')->name('inputlembaga2');
        Route::post('/simpan-lembaga2', 'DataUmumController@storelembaga2')->name('simpan-lembaga2');
        Route::post('/update-lembaga2/{id}', 'DataUmumController@updatelembaga2')->name('update-lembaga2');
        Route::get('/viewlembaga2/{id}', 'DataUmumController@viewlembaga2');

        Route::get('/inputrphjp2', 'DataUmumController@inputrphjp2')->name('inputrphjp2');
        Route::post('/simpan-rphjp2', 'DataUmumController@storerphjp2')->name('simpan-rphjp2');
        Route::post('/update-rphjp2/{id}', 'DataUmumController@updaterphjp2')->name('update-rphjp2');
        Route::get('/viewrphjp2/{id}', 'DataUmumController@viewrphjp2');

        Route::get('/identitas2', 'DataUmumController@identitas2')->name('homes');
        Route::get('/kepalakph2', 'DataUmumController@kepalakph2')->name('kepalakph');
        Route::get('/fasilitas2', 'DataUmumController@fasilitas2')->name('fasilitass');
        Route::get('/lembaga2', 'DataUmumController@lembaga2')->name('lembagas');
        Route::get('/rphjp2', 'DataUmumController@rphjp2')->name('rphjps');

        //dataumum3
        Route::get('/inputidentitas3', 'DataUmumController@inputidentitas3')->name('inputidentitas3');
        Route::post('/simpan-identitas3', 'DataUmumController@storeidentitas3')->name('simpan-identitas3');
        Route::get('/show-dataumum3', 'DataUmumController@index3')->name('show-dataumum3');
        Route::post('/update-identitas3/{id}', 'DataUmumController@updateidentitas3')->name('update-identitas3');
        Route::get('/viewidentitas3/{id}', 'DataUmumController@viewidentitas3');

        Route::get('/inputkepalakph3', 'DataUmumController@inputkepalakph3')->name('inputkepalakph3');
        Route::post('/simpan-kepalakph3', 'DataUmumController@storekepalakph3')->name('simpan-kepalakph3');
        Route::post('/update-kepalakph3/{id}', 'DataUmumController@updatekepalakph3')->name('update-kepalakph3');
        Route::get('/viewkepalakph3/{id}', 'DataUmumController@viewkepalakph3');

        Route::get('/inputlembaga3', 'DataUmumController@inputlembaga3')->name('inputlembaga3');
        Route::post('/simpan-lembaga3', 'DataUmumController@storelembaga3')->name('simpan-lembaga3');
        Route::post('/update-lembaga3/{id}', 'DataUmumController@updatelembaga3')->name('update-lembaga3');
        Route::get('/viewlembaga3/{id}', 'DataUmumController@viewlembaga3');

        Route::get('/inputrphjp3', 'DataUmumController@inputrphjp3')->name('inputrphjp3');
        Route::post('/simpan-rphjp3', 'DataUmumController@storerphjp3')->name('simpan-rphjp3');
        Route::post('/update-rphjp3/{id}', 'DataUmumController@updaterphjp3')->name('update-rphjp3');
        Route::get('/viewrphjp3/{id}', 'DataUmumController@viewrphjp3');

        Route::get('/identitas3', 'DataUmumController@identitas3')->name('homes');
        Route::get('/kepalakph3', 'DataUmumController@kepalakph3')->name('kepalakph');
        Route::get('/fasilitas3', 'DataUmumController@fasilitas3')->name('fasilitass');
        Route::get('/lembaga3', 'DataUmumController@lembaga3')->name('lembagas');
        Route::get('/rphjp3', 'DataUmumController@rphjp3')->name('rphjps');


        //dataumum4
        Route::get('/inputidentitas4', 'DataUmumController@inputidentitas4')->name('inputidentitas4');
        Route::post('/simpan-identitas4', 'DataUmumController@storeidentitas4')->name('simpan-identitas4');
        Route::get('/show-dataumum4', 'DataUmumController@index4')->name('show-dataumum4');
        Route::post('/update-identitas4/{id}', 'DataUmumController@updateidentitas4')->name('update-identitas4');
        Route::get('/viewidentitas4/{id}', 'DataUmumController@viewidentitas4');

        Route::get('/inputkepalakph4', 'DataUmumController@inputkepalakph4')->name('inputkepalakph4');
        Route::post('/simpan-kepalakph4', 'DataUmumController@storekepalakph4')->name('simpan-kepalakph4');
        Route::post('/update-kepalakph4/{id}', 'DataUmumController@updatekepalakph4')->name('update-kepalakph4');
        Route::get('/viewkepalakph4/{id}', 'DataUmumController@viewkepalakph4');

        Route::get('/inputlembaga4', 'DataUmumController@inputlembaga4')->name('inputlembaga4');
        Route::post('/simpan-lembaga4', 'DataUmumController@storelembaga4')->name('simpan-lembaga4');
        Route::post('/update-lembaga4/{id}', 'DataUmumController@updatelembaga4')->name('update-lembaga4');
        Route::get('/viewlembaga4/{id}', 'DataUmumController@viewlembaga4');

        Route::get('/inputrphjp4', 'DataUmumController@inputrphjp4')->name('inputrphjp4');
        Route::post('/simpan-rphjp4', 'DataUmumController@storerphjp4')->name('simpan-rphjp4');
        Route::post('/update-rphjp4/{id}', 'DataUmumController@updaterphjp4')->name('update-rphjp4');
        Route::get('/viewrphjp4/{id}', 'DataUmumController@viewrphjp4');

        //Data Ekonomi
        Route::get('/inputpotensiekonomi1', 'EkonomiController@inputpotensiekonomi1')->name('inputpotensiekonomi1');
        Route::post('/simpan-potensiekonomi1', 'EkonomiController@store5')->name('simpan-potensiekonomi1');
        Route::get('/showpotensiekonomi1', 'EkonomiController@showpotensiekonomi1')->name('showpotensiekonomi1');
        Route::get('/ajaxekonomi1', 'EkonomiController@ajaxekonomi1')->name('ajaxekonomi1');

        Route::post('/update-potensiekonomi1/{id}', 'EkonomiController@update5')->name('update-potensiekonomi1');
        Route::get('/view5/{id}', 'EkonomiController@view5');
        //gabungan potensiekonomi dan jasalingkungan
        Route::get('/showkeloladataekonomi1', 'EkonomiController@showkeloladataekonomi1')->name('show-dataekonomi');

        //Data Ekonomi 2
        Route::get('/inputpotensiekonomi2', 'EkonomiController@inputpotensiekonomi2')->name('inputpotensiekonomi2');
        Route::post('/simpan-potensiekonomi2', 'EkonomiController@storepotensiekonomi2')->name('simpan-potensiekonomi2');
        Route::get('/showpotensiekonomi2', 'EkonomiController@showpotensiekonomi2')->name('showpotensiekonomi2');
        Route::get('/ajaxekonomi2', 'EkonomiController@ajaxekonomi2')->name('ajaxekonomi2');

        Route::post('/update-potensiekonomi2/{id}', 'EkonomiController@updatepotensiekonomi2')->name('update-potensiekonomi2');
        Route::get('/viewpotensiekonomi2/{id}', 'EkonomiController@viewpotensiekonomi2');
        //gabungan potensiekonomi dan jasalingkungan
        Route::get('/showkeloladataekonomi2', 'EkonomiController@showkeloladataekonomi2')->name('show-dataekonomi');

        //Data Ekonomi 3
        Route::get('/inputpotensiekonomi3', 'EkonomiController@inputpotensiekonomi3')->name('inputpotensiekonomi3');
        Route::post('/simpan-potensiekonomi3', 'EkonomiController@storepotensiekonomi3')->name('simpan-potensiekonomi3');
        Route::get('/showpotensiekonomi3', 'EkonomiController@showpotensiekonomi3')->name('showpotensiekonomi3');
        Route::get('/ajaxekonomi3', 'EkonomiController@ajaxekonomi3')->name('ajaxekonomi3');

        Route::post('/update-potensiekonomi3/{id}', 'EkonomiController@updatepotensiekonomi3')->name('update-potensiekonomi3');
        Route::get('/viewpotensiekonomi3/{id}', 'EkonomiController@viewpotensiekonomi3');
        //gabungan potensiekonomi dan jasalingkungan
        Route::get('/showkeloladataekonomi3', 'EkonomiController@showkeloladataekonomi3')->name('show-dataekonomi');

        //Data Ekonomi 4
        Route::get('/inputpotensiekonomi4', 'EkonomiController@inputpotensiekonomi4')->name('inputpotensiekonomi4');
        Route::post('/simpan-potensiekonomi4', 'EkonomiController@storepotensiekonomi4')->name('simpan-potensiekonomi4');
        Route::get('/showpotensiekonomi4', 'EkonomiController@showpotensiekonomi4')->name('showpotensiekonomi4');
        Route::get('/ajaxekonomi4', 'EkonomiController@ajaxekonomi4')->name('ajaxekonomi4');

        Route::post('/update-potensiekonomi4/{id}', 'EkonomiController@updatepotensiekonomi4')->name('update-potensiekonomi4');
        Route::get('/viewpotensiekonomi4/{id}', 'EkonomiController@viewpotensiekonomi4');
        //gabungan potensiekonomi dan jasalingkungan
        Route::get('/showkeloladataekonomi4', 'EkonomiController@showkeloladataekonomi4')->name('show-dataekonomi');

        Route::post('/toggle-approve', 'AdminController@approval');

    });
    Route::group(['middleware' => ['ceklogin:adminunit']], function(){
       //Unit kerja
       Route::get('home2', 'Admin2Controller@home')->name('home2');
       //Galeri Unit kerja
       Route::get('/inputgaleriunitkerja', 'Admin2Controller@inputgaleriunitkerja')->name('inputgaleriunitkerja');
       Route::post('/simpan-galeriunitkerja', 'Admin2Controller@storegaleriunitkerja')->name('simpan-galeriunitkerja');
       Route::get('/showgaleriunitkerja', 'Admin2Controller@showgaleriunitkerja')->name('showgaleriunitkerja');

       Route::post('/update-galeriunitkerja/{id}', 'Admin2Controller@updategaleriunitkerja')->name('update-galeriunitkerja');
       Route::get('/viewgaleriunitkerja/{id}', 'Admin2Controller@viewgaleriunitkerja');
       Route::get('/destroygaleriunitkerja/{id}', 'Admin2Controller@destroygaleriunitkerja')->name('delete-galeriunitkerja');


       //NKK
       Route::get('/inputnkk', 'Admin2Controller@inputnkk')->name('inputnkk');
       Route::post('/simpan-nkk', 'Admin2Controller@storenkk')->name('simpan-nkk');
       Route::get('/shownkk', 'Admin2Controller@shownkk')->name('shownkk');

       Route::post('/update-nkk/{id}', 'Admin2Controller@updatenkk')->name('update-nkk');
       Route::get('/destroynkk/{id}', 'Admin2Controller@destroynkk')->name('delete-nkk');
       Route::get('/nkk', 'Admin2Controller@viewnkk');
       Route::get('/viewnkk2/{id}', 'Admin2Controller@viewnkk2');
       Route::get('/deletenkk/{id}', 'Admin2Controller@deletenkk');

   });
});
