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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'LoginController@index')->name('auth.index')->middleware('guest');
Route::post('/login', 'LoginController@login')->name('auth.login');
Route::post('/logout', 'LoginController@logout')->name('auth.logout');

/* DASHBOARD */
Route::get('/dashboard', 'DashboardController')->name('dashboard');












//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
