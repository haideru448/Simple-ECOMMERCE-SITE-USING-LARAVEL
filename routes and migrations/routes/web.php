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
Route::post('/form', 'productscontroller@index');
Route::get('/form', 'productscontroller@index');
Route::post('/insert', 'productscontroller@add');
Route::get('/view', 'productscontroller@view');

Route::get('/delete/{id}', 'productscontroller@delete');

Route::get('/edit/{id}', 'productscontroller@edit');
Route::post('/update/{id}', 'productscontroller@update');
