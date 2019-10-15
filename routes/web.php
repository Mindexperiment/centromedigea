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
Route::get( '/servizi/chirurgia', 'ServiziController@chirurgia' )->name( 'servizi.chirurgia' );
Route::get( '/servizi/conservativa', 'ServiziController@conservativa' )->name( 'servizi.conservativa' );
Route::get( '/servizi/estetica', 'ServiziController@estetica' )->name( 'servizi.estetica' );
Route::get( '/servizi/igiene', 'ServiziController@igiene' )->name( 'servizi.igiene' );
Route::get( '/servizi/implantologia', 'ServiziController@implantologia' )->name( 'servizi.implantologia' );
Route::get( '/servizi/laser', 'ServiziController@laser' )->name( 'servizi.laser' );
Route::get( '/servizi/medicina', 'ServiziController@medicina' )->name( 'servizi.medicina' );
Route::get( '/servizi/ortodonzia', 'ServiziController@ortodonzia' )->name( 'servizi.ortodonzia' );
Route::get( '/servizi/osteopatia', 'ServiziController@osteopatia' )->name( 'servizi.osteopatia' );
Route::get( '/servizi/paradontologia', 'ServiziController@paradontologia' )->name( 'servizi.paradontologia' );
Route::get( '/servizi/pedodonzia', 'ServiziController@pedodonzia' )->name( 'servizi.pedodonzia' );
Route::get( '/servizi/prgf', 'ServiziController@prgf' )->name( 'servizi.prgf' );
Route::get( '/servizi/protesi', 'ServiziController@protesi' )->name( 'servizi.protesi' );
Route::get( '/servizi/radiologia', 'ServiziController@radiologia' )->name( 'servizi.radiologia' );
Route::get( '/servizi/roncopatia', 'ServiziController@roncopatia' )->name( 'servizi.roncopatia' );
Route::get( '/servizi/sedazione', 'ServiziController@sedazione' )->name( 'servizi.sedazione' );
