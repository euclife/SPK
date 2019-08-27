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
	Route::get('/dashboard', 'PelamarController@index')->name('home');
	Route::get('/profile', 'UserController@profil');
	Route::post('/profile', 'UserController@profilUpdate');
	Route::post('/profileFoto', 'UserController@profilFoto');
	Route::get('/lowongan/accept/{id}', 'LowonganController@regis');
	Route::get('/lowongan/create', 'LowonganController@reg');

});

Route::middleware(['auth','admin'])->group(function () {
	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::get('/admin/lowongan', 'LowonganController@index');
	Route::get('/admin/lowongan/create', 'LowonganController@create');
	Route::post('/admin/lowongan/create', 'LowonganController@store');
	Route::get('/admin/lowongan/edit/{id}', 'LowonganController@edit');
	Route::patch('/admin/lowongan/edit/{id}', 'LowonganController@update');
	Route::delete('/admin/lowongan/hapus/{id}', 'LowonganController@destroy');
	Route::get('/admin/lowongan/{id}', 'LowonganController@show');
	Route::get('/admin/profile/{id}', 'PelamarController@show');
});
