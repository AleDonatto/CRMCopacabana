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

Route::get('iniciar','PagesController@Iniciar')->name('iniciar');

Route::get('index','PageControler@Index')->name('index');

Route::post('main','PagesController@LoginUser')->name('conn');

Route::post('index','PageControler@Index')->name('index');


Route::get('encuesta','PagesController@encuesta')->name('encuesta');

Route::get('salir','PagesController@Logout')->name('Salir');

/*Route::get('conn',function(){
    return view('conn');
})->name('conn');
*/


/* Ruta sin controlador de paginas*/
Route::get('index',function(){
    return view('index');
})->name('index');




/*Route::post('conn',function(){
    return view('conn');
})->name('conn');*/

Route::get('prospectos',function(){
    return view('prospectos');
})->name('prospectos');

Route::get('potenciales',function(){
    return view('potenciales');
})->name('potenciales');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('iniciar','PagesController@Iniciar')->name('iniciar');

Route::post('main','PagesController@LoginUser')->name('conn');

Route::post('index','PageControler@Index')->name('index');

Route::get('salir','PagesController@Logout')->name('salir');

/*Route::get('salir',function(){
    return view('cerraSession');
})->name('salir');*/

