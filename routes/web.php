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


Route::get('/', 'PagesController@Acceuil');
Route::get('/Activités', 'PagesController@Activités');
Route::get('/Boutique', 'PagesController@Boutique');
Route::get('/Contact', 'PagesController@Contact');
Route::get('/Evenements', 'PagesController@Evenements');
