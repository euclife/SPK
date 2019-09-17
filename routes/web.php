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

Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/tes', 'WelcomeController@tes');

Auth::routes(['verify' => true]);

//API Untuk Lowongan Pekerjaan
Route::get('/api/syaratlowongan/{id}', 'apiController@syaratlowongan');

Route::middleware('auth')->group(function () {
	Route::get('/dashboard', 'PelamarController@index')->name('home');
	Route::get('/profile', 'UserController@profil');
	Route::post('/profile', 'UserController@profilUpdate');
	Route::post('/profileFoto', 'UserController@profilFoto');
	Route::get('/lowongan/accept/{id}', 'LowonganController@regis');
	Route::post('/pelamar/accept', 'PelamarController@store');
	Route::get('/lowongan/create', 'LowonganController@reg');

	Route::get('/soal/{id}', 'SoalController@show');
	Route::post('/soal/jawabs', 'SoalController@jawab');
	Route::post('/soal/kirim','SoalController@kirim');
	Route::get('/test', 'SoalController@kirim');
	Route::get('/done', 'SoalController@done');
	Route::get('/mundur', 'PelamarController@mundur');
});

Route::middleware(['auth','admin'])->group(function () {
	Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/lowongan', 'LowonganController@index');
	Route::get('/lowongan/create', 'LowonganController@create');
	Route::post('/lowongan/create', 'LowonganController@store');
	Route::get('/lowongan/edit/{id}', 'LowonganController@edit');
	Route::patch('/lowongan/edit/{id}', 'LowonganController@update');
	Route::delete('/lowongan/hapus/{id}', 'LowonganController@destroy');
	Route::get('/lowongan/{id}', 'LowonganController@show');
	Route::get('/lowongan/compile/{id}', 'LowonganController@compile');
	Route::get('/profile/{id}', 'PelamarController@show');
	Route::get('/pelamar/lolos/{id}', 'PelamarController@lolos');
	Route::get('/pelamar/gagal/{id}', 'PelamarController@mundurAdmin');
	
	Route::group(['prefix' => 'soal'], function () {
			Route::get('/', 'SoalController@index');
			Route::get('/create', 'SoalController@create');
			Route::post('/create', 'SoalController@store');
			Route::get('/edit/{id}', 'SoalController@edit');
			Route::post('/edit/{id}', 'SoalController@update');
			Route::delete('/hapus/{id}', 'SoalController@destroy');
	});

		Route::group(['prefix' => 'user'], function () {
			Route::get('/', 'UserController@index');
			Route::get('/create', 'UserController@create');
			Route::post('/create', 'UserController@store');
			Route::get('/edit/{id}', 'UserController@edit');
			Route::post('/edit/{id}', 'UserController@update');
			Route::delete('/hapus/{id}', 'UserController@destroy');
		});
	});
});
