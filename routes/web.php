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
Route::get('/', function () {
	return view('landing.index');
});

Auth::routes();
Route::group(['middleware' => 'auth:admin','prefix' => 'admin', 'as' => 'admin'], function() {
	routeController('dashboard', 'Admin\AdminController');

});

Route::get('/home', 'HomeController@index')->name('home');
