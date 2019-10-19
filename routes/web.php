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

Route::get('/','PagesController@Inicio');

//Route::post('main','PagesController@LoginPost')->name('conn');

Route::get('encuesta','PagesController@encuesta')->name('encuesta');

/* Ruta sin controlador de paginas*/
Route::get('index',function(){
    return view('index');
})->name('index');


//rutas de usuario
Route::post('main/user','PagesController@InsertUser')->name('user.insertUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('iniciar','PagesController@Iniciar')->name('iniciar');

Route::post('salir','PagesController@Logout')->name('salir');

Route::post('main','PagesController@LoginUser')->name('main');

Route::get('form','PagesController@formUser')->name('formUser');

Route::get('listuser','PagesController@listUsers')->name('listUser');

Route::get('formclients','PagesController@formClients')->name('formclients');

Route::get('allUser','PagesController@ConsUser')->name('allUser');

Route::get('permisos','PagesController@Permisos')->name('permisos');

//rutas de clientes
Route::Resource('clientes','ClientesController');


