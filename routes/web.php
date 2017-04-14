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

Route::get('/', 'HomeController@index');
/*Route::get('/login', function () {
	return view('auth.login');
});*/

/*Route::group(['middleware' => ['web']], function() {
	Route::resource('admin', 'AdminController');
});Route::get('data', function() {
	
	return view ('datables');
});
Route::group(['middleware' => ['web']], function() {
	Route::resource('blog', 'BlogController');
});*/



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::group(['middleware' => ['web']], function() {
	Route::resource('users', 'UsersController');
});

Route::group(['middleware' => ['web']], function() {
	Route::resource('nasabah', 'NasabahController');
});
Route::group(['middleware' => ['web']], function() {
	Route::resource('debet', 'DebetController');
});
Route::group(['middleware' => ['web']], function() {
	Route::resource('kridit', 'KriditController');
});