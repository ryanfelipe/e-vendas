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
Route::get('/', 'Web\HomeController@index');

Route::get('/home', 'Web\HomeController@home');

Route::get('/blog', 'Web\HomeController@blog');

Route::get('/contatos', 'Web\HomeController@contatos');

Route::get('/moda-do-momento', 'Web\HomeController@modaDoMomento');

Route::get('/list-products', 'Web\HomeController@listProducts');
