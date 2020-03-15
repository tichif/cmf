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

/*
*
* Front
*
*/
Route::get('/', 'Front\AccueilController@index');

Route::get('/calendrier', 'Front\AccueilController@activitees');

Route::get('/apropos', 'Front\AccueilController@about');

Route::get('/gallerie', 'Front\GallerieController@gallerie');

Route::get('/contact', 'Front\ContactController@getContact');
Route::post('/contact', 'Front\ContactController@postContact');
