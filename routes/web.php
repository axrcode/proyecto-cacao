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

/* EMPRESAS */
Route::get('/empresas', 'EmpresaController@index')->name('empresa.index');
Route::get('/empresas/create', 'EmpresaController@create')->name('empresa.create');
Route::post('/empresas', 'EmpresaController@store')->name('empresa.store');
Route::get('/empresas/{empresa}', 'EmpresaController@show')->name('empresa.show');
Route::get('/empresas/{empresa}/edit', 'EmpresaController@edit')->name('empresa.edit');
Route::put('/empresas/{empresa}', 'EmpresaController@update')->name('empresa.update');
Route::delete('/empresas/{empresa}', 'EmpresaController@destroy')->name('empresa.destroy');

/* EMPLEADOS */
Route::get('/empleados', 'EmpresaController@index')->name('empleado.index');
Route::get('/empleados/create', 'EmpresaController@create')->name('empleado.create');
Route::post('/empleados', 'EmpresaController@store')->name('empleado.store');
Route::get('/empleados/{empleado}', 'EmpresaController@show')->name('empleado.show');
Route::get('/empleados/{empleado}/edit', 'EmpresaController@edit')->name('empleado.edit');
Route::put('/empleados/{empleado}', 'EmpresaController@update')->name('empleado.update');
Route::delete('/empleados/{empleado}', 'EmpresaController@destroy')->name('empleado.destroy');









//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
