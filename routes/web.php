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

// Route::get('/lacak-aduan',function () {
//     return view('tracking');
// })->name('lacak-aduan');

Route::post('/lacak-aduan','AduanController@lacak_aduan')->name('lacak-aduan');

Route::post('tambahAduanLapor','AduanController@tambahAduanManual')->name('tambahAduanLapor');

Route::redirect('/lacak-aduan', '/', 301);

Route::get('/login',function () {
    return view('login');
})->name('login');

Route::get('privacy',function () {
    return view('privacy');
})->name('privacy');

Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::post('postLogin','Auth\LoginController@postLogin')->name('postLogin');


// Route::get('send-mail', function () {
   
//     $details = [
//         'no_tiket' => '8890',
//         'email_to' => 'v.bobotoh@gmail.com'
//     ];

//      dispatch(new App\Jobs\SendTiketEmailJob($details));
   
//     dd("Email is Sent.");
// });


Route::group(['middleware' => ['login']], function () {
	Route::get('home','IndexController@index')->name('home');
	Route::get('statistik','IndexController@statistik')->name('statistik');
	Route::get('analitik','IndexController@analitik')->name('analitik');
	Route::get('publish/{mode}','IndexController@publish')->name('publish');
	Route::get('profile','IndexController@profile')->name('profile');
	Route::post('change_password','MasterController@change_password')->name('change_password');
	
	Route::get('dokumentasi','IndexController@dokumentasi')->name('dokumentasi');
	Route::get('statAll','MasterController@statAll')->name('statAll');
	Route::get('statistikjs/{chart}','MasterController@statistikjs');
	Route::get('masterUserApi/{id?}','MasterController@masterUserApi')->name('masterUserApi');
	Route::get('getProvinsi','MasterController@getProvinsi')->name('getProvinsi');
	Route::get('getCity/{id_provinsi}','MasterController@getCity')->name('getCity');

	Route::get('download/{path}','AduanController@download')->name('download');




	Route::middleware(['checkRole:op_pusat,op_kanwil,op_kantah'])->group(function(){
		//Twitter
	  	Route::get('aduan/{type}','AduanController@index')->name('aduan');
	  	Route::post('postComment','AduanController@sendComment')->name('postComment');
	  	Route::post('postReply','AduanController@sendReply')->name('postReply');
	  	Route::get('postEmailReply','AduanController@sendEmail')->name('postEmailReply');
		Route::post('spamFeed','AduanController@spamFeed')->name('spamFeed');
		Route::post('handleFeed','AduanController@handleFeed')->name('handleFeed');
		Route::get('updateJenisAduan/{id_feed}/{id_category}','AduanController@updateJenisAduan')->name('updateJenisAduan');
		Route::post('tambahAduanManual','AduanController@tambahAduanManual')->name('tambahAduanManual');




		// Route::get('instagram','InstagramController@index')->name('instagram');
	 //  	Route::post('postInstagram','InstagramController@sendComment')->name('postInstagram');
	 //  	Route::post('postReply','InstagramController@send_reply')->name('postReply');

		// Route::get('facebook','FacebookController@index')->name('facebook');
		// Route::get('youtube','YoutubeController@index')->name('youtube');


	});

	Route::middleware(['checkRole:admin_pusat,admin_kanwil,admin_kantah'])->group(function(){
		Route::get('laporan/{mode}','IndexController@laporan')->name('laporan');
		Route::get('master_user','IndexController@masterUser')->name('master_user');
		Route::get('master_kantah','IndexController@masterKantah')->name('master_kantah');
		Route::get('master_kanwil','IndexController@masterKanwil')->name('master_kanwil');
		Route::get('master_konfig','IndexController@masterKonfig')->name('master_konfig');
		Route::get('spam_list','IndexController@spamList')->name('spam_list');

		Route::get('master_ministry','IndexController@masterMinistry')->name('master_ministry');
		Route::get('master_jenis_aduan','IndexController@masterJenisAduan')->name('master_jenis_aduan');
		Route::get('master_level','IndexController@masterLevel')->name('master_level');
		Route::get('master_role','IndexController@masterRole')->name('master_role');

		Route::get('master/{api}/{id?}','MasterController@masterGetApi')->name('master');
		Route::get('delete_master/{api}/{id?}','MasterController@masterDelApi')->name('delete_master');
		Route::get('delete_user/{id?}','MasterController@masterUserDelApi')->name('delete_user');
		Route::post('add_master','MasterController@masterAddApi')->name('add_master');
		Route::get('masterSpam','MasterController@masterSpam')->name('masterSpam');

		Route::post('add_master_user','MasterController@masterUserAddApi')->name('add_master_user');

	});
});


