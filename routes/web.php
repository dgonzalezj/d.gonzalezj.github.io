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

Route::get('/','PagesController@inicio')->name('inicio');

Route::get('fotos','PagesController@fotos')->name('foto');

Route::post('/','PagesController@crear')->name('motas.crear');

Route::get('/editar/{id}','PagesController@editar')->name('motas.editar');

Route::put('/editar/{id}','PagesController@update')->name('motas.update');

Route::delete('/eliminar/{id}','PagesController@delete')->name('motas.eliminar');

Route::get('blog','PagesController@noticias')->name('noticias');

Route::get('nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');

Route::get('/detalle/{id}','PagesController@detalle')->name('motas.detalle');

