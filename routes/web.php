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

// ** Site Routes **

//Site->Home
Route::get('/', 'Site\SiteController@index' );

//Site->Categoria
Route::get('categoria', 'Site\SiteController@categoria' );

//Site->Post
Route::get('post', 'Site\SiteController@post' );

//Site->Empresa
Route::get('empresa', 'Site\SiteController@empresa' );

//Site->Contato
Route::get('contato', 'Site\SiteController@contato' );


// // ** Painel Routes **

// //Painel->Home
// Route::get('painel/home', 'Painel\PainelController@home');

// //Painel->List
// Route::get('painel/list', 'Painel\PainelController@list');

// //Painel->Form
// Route::get('painel/forms', 'Painel\PainelController@form');


// ** Painel Routes **
Route::group(['prefix' => 'painel'], function(){
    //Painel->Home
    Route::resource('/usuarios', 'Painel\UserController');

});

//Dashboard
// Route::get('dashboard', function(){ return view('dashboard'); });



