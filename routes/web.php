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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'],function(){
	
	Route::get('/user','UserController@index');
	Route::get('/user/create','UserController@create');
	Route::post('/user/store','UserController@store');
	Route::get('/user/edit/{id}','UserController@edit');
	Route::post('/user/update/{id}','UserController@update');
	Route::get('/user/delete/{id}','UserController@delete');
	Route::get('/user/exportpdf','UserController@exportPdf');

	Route::get('/outlet','OutletController@index');
	Route::get('/outlet/create','OutletController@create');
	Route::post('/outlet/store','OutletController@store');
	Route::get('/outlet/edit/{id}','OutletController@edit');
	Route::post('/outlet/update/{id}','OutletController@update');
	Route::get('/outlet/delete/{id}','OutletController@delete');

	Route::get('/member','MemberController@index');
	Route::get('/member/create','MemberController@create');
	Route::post('/member/store','MemberController@store');
	Route::get('/member/edit/{id}','MemberController@edit');
	Route::post('/member/update/{id}','MemberController@update');
	Route::get('/member/delete/{id}','MemberController@delete');

	Route::get('/paket','PaketController@index');
	Route::get('/paket/create','PaketController@create');
	Route::post('/paket/store','PaketController@store');
	Route::get('/paket/edit/{id}','PaketController@edit');
	Route::post('/paket/update/{id}','PaketController@update');
	Route::get('/paket/delete/{id}','PaketController@delete');

	Route::get('/transaksi','TransaksiController@index');
	Route::get('/transaksi/create','TransaksiController@create');
	Route::post('/transaksi/store','TransaksiController@store');
	Route::get('/transaksi/edit/{id}','TransaksiController@edit');
	Route::post('/transaksi/update/{id}','TransaksiController@update');
	Route::get('/transaksi/delete/{id}','TransaksiController@delete');
	Route::get('/transaksi/tambah/{id}','TransaksiController@tambah');
	Route::post('/transaksi/show/{id}','TransaksiController@show');
	Route::get('/transaksi/exportpdf','TransaksiController@exportPdf');

	Route::get('/detail','DetailController@index');
	Route::get('/detail/create/{id}','DetailController@create');
	Route::post('/detail/store/{id}','DetailController@store');
	Route::get('/detail/edit/{id}','DetailController@edit');
	Route::post('/detail/update/{id}','DetailController@update');
	Route::get('/detail/delete/{id}','DetailController@delete');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
