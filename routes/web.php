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


	Route::middleware(['checkRole:op_pusat,op_kanwil,op_kantah'])->group(function(){
		//Twitter
	  	Route::get('twitter','TwitterController@index')->name('twitter');
	  	Route::post('postTwitter','TwitterController@sendComment')->name('postTwitter');


		Route::get('instagram','InstagramController@index')->name('instagram');
		Route::get('facebook','FacebookController@index')->name('facebook');
	});

	Route::middleware(['checkRole:admin_pusat'])->group(function(){
		Route::get('laporan/{mode}','IndexController@laporan')->name('laporan');
	});
});


