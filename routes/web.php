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

//Home
Route::get('/', 'Site\SiteController@index' );

//Categoria
Route::get('categoria', 'Site\SiteController@categoria' );

//Post
Route::get('post', 'Site\SiteController@post' );

//Empresa
Route::get('empresa', 'Site\SiteController@empresa' );

//Contato
Route::get('contato', 'Site\SiteController@contato' );

//Dashboard
// Route::get('dashboard', function(){ return view('dashboard'); });



