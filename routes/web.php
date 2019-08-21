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


//API
Route::get('/api/syaratlowongan/{id}', 'apiController@syaratlowongan');


Route::middleware('auth')->group(function () {
	Route::get('/dashboard', 'HomeController@index')->name('home');
	Route::get('/profile', 'PelamarController@profil');
	Route::post('/profile', 'PelamarController@profilUpdate');
	Route::post('/profileFoto', 'PelamarController@profilFoto');

	Route::get('/lowongan', 'LowonganController@index');
	Route::get('/lowongan/accept/{id}', 'LowonganController@regis');
	Route::get('/lowongan/create', 'LowonganController@reg');

	Route::get('/test', 'LowonganController@test');


});

Route::middleware(['auth','admin'])->group(function () {
	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::get('/admin/listlowongan', 'LowonganController@indexAdmin');
	Route::get('/admin/lowongan/create', 'LowonganController@create');
	Route::get('/admin/lowongan/{id}', 'LowonganController@show');

});
