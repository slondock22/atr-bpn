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

Route::get('/',function () {
    return view('index');
});

Route::get('/login',function () {
    return view('login');
})->name('login');

Route::post('postLogin','Auth\LoginController@postLogin')->name('postLogin');


Route::group(['middleware' => ['login']], function () {
	Route::get('home','IndexController@index')->name('home');
	Route::get('statistik','IndexController@statistik')->name('statistik');
	Route::get('publish/{mode}','IndexController@publish')->name('publish');
	Route::get('profile','IndexController@profile')->name('profile');
	Route::get('dokumentasi','IndexController@dokumentasi')->name('dokumentasi');


	Route::middleware(['checkRole:op_pusat,op_kanwil,op_kantah'])->group(function(){
		//Twitter
	  	Route::get('twitter','TwitterController@index')->name('twitter');
	  	Route::post('postTwitter','TwitterController@sendComment')->name('postTwitter');


		Route::get('instagram','InstagramController@index')->name('instagram');
		Route::get('facebook','FacebookController@index')->name('facebook');
		Route::get('youtube','YoutubeController@index')->name('youtube');

	});

	Route::middleware(['checkRole:admin_pusat,admin_kanwil,admin_kantah'])->group(function(){
		Route::get('laporan/{mode}','IndexController@laporan')->name('laporan');
		Route::get('master_user','IndexController@masterUser')->name('master_user');
		Route::get('masterUserApi','MasterController@masterUserApi')->name('masterUserApi');
		Route::get('master_kantah','IndexController@masterKantah')->name('master_kantah');
		Route::get('master_kanwil','IndexController@masterKanwil')->name('master_kanwil');
		Route::get('master_jenis_aduan','IndexController@masterJenisAduan')->name('master_jenis_aduan');
		Route::get('master_konfig','IndexController@masterKonfig')->name('master_konfig');
		Route::get('spam_list','IndexController@spamList')->name('spam_list');

	});
});


