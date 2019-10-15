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

Route::get('/servizi', 'ServiziController@index')->name('servizi.index');
Route::get( '/servizi/chirurgia', 'ServiziController@chirurgia' )->name( 'services.chirurgia' );
Route::get( '/servizi/conservativa', 'ServiziController@conservativa' )->name( 'services.conservativa' );
Route::get( '/servizi/estetica', 'ServiziController@estetica' )->name( 'services.estetica' );
Route::get( '/servizi/igiene', 'ServiziController@igiene' )->name( 'services.igiene' );
Route::get( '/servizi/implantologia', 'ServiziController@implantologia' )->name( 'services.implantologia' );
Route::get( '/servizi/laser', 'ServiziController@laser' )->name( 'services.laser' );
Route::get( '/servizi/medicina', 'ServiziController@medicina' )->name( 'services.medicina' );
Route::get( '/servizi/ortodonzia', 'ServiziController@ortodonzia' )->name( 'services.ortodonzia' );
Route::get( '/servizi/osteopatia', 'ServiziController@osteopatia' )->name( 'services.osteopatia' );
Route::get( '/servizi/paradontologia', 'ServiziController@paradontologia' )->name( 'services.paradontologia' );
Route::get( '/servizi/pedodonzia', 'ServiziController@pedodonzia' )->name( 'services.pedodonzia' );
Route::get( '/servizi/prgf', 'ServiziController@prgf' )->name( 'services.prgf' );
Route::get( '/servizi/protesi', 'ServiziController@protesi' )->name( 'services.protesi' );
Route::get( '/servizi/radiologia', 'ServiziController@radiologia' )->name( 'services.radiologia' );
Route::get( '/servizi/roncopatia', 'ServiziController@roncopatia' )->name( 'services.roncopatia' );
Route::get( '/servizi/sedazione', 'ServiziController@sedazione' )->name( 'services.sedazione' );
