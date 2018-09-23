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

// Auth Routes

Auth::routes();


/*
 * Routes Sites
 */
Route::get('/contato', 'Site\SiteController@contato');
Route::get('/empresa', 'Site\SiteController@empresa');
Route::get('/post', 'Site\SiteController@post');
Route::get('/categoria', 'Site\SiteController@categoria');
Route::get('/', 'Site\SiteController@index');

/****************************************************************************************
 * Rotas do Painel
****************************************************************************************/

Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function (){
    //Usuários
    Route::any('/usuarios/pesquisar', 'Painel\UserController@search')->name('usuarios.search');
    Route::resource('/usuarios', 'Painel\UserController');

    Route::any('/categorias/pesquisar', 'Painel\CategoryController@search')->name('categorias.search');
    Route::resource('/categorias', 'Painel\CategoryController');

    Route::get('/logout', 'Auth\LoginController@Logout' );


});



Route::get('/painel/forms', function (){

    return view ('painel.modulos.forms');
});






// Route::get('/home', 'HomeController@index')->name('home');
