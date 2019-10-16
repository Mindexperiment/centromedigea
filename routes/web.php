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

Route::get('/partners', 'PartnersController@index')->name('partners.index');
Route::get('/partners/estetica', 'PartnersController@estetica')->name('partners.estetica');
Route::get('/partners/fisioterapia', 'PartnersController@fisioterapia')->name('partners.fisioterapia');
Route::get('/partners/logopedia', 'PartnersController@logopedia')->name('partners.logopedia');
Route::get('/partners/odontoiatria', 'PartnersController@odontoiatria')->name('partners.odontoiatria');
Route::get('/partners/pedodonzia', 'PartnersController@pedodonzia')->name('partners.pedodonzia');
Route::get('/partners/pilates', 'PartnersController@pilates')->name('partners.pilates');
Route::get('/partners/protesi', 'PartnersController@protesi')->name('partners.protesi');
Route::get('/partners/udito', 'PartnersController@udito')->name('partners.udito');
