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

Route::get('encuesta','PagesController@encuesta')->name('encuesta');

/* Ruta sin controlador de paginas*/
/*Route::get('index',function(){
    return view('index');
})->name('index');*/


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('iniciar','PagesController@Iniciar')->name('iniciar');

Route::get('/','PagesController@Logout')->name('salir');

Route::post('/','PagesController@LoginUser')->name('main');

Route::get('permisos','PagesController@Permisos')->name('permisos');

//rutas de clientes

Route::get('clientessmall','SpecialController@ClientesSmall')->name('clientessmall');

Route::get('bitacora','SpecialController@Bitacora')->name('bitacora');

Route::post('newCotizacion','SpecialController@CotizacionInsert')->name('newCotizacion');

Route::get('confirmCotizacion/{id}','SpecialController@ConfirmCotizacion')->name('confirmCotizacion');

Route::get('cancelCotizacion/{id}','SpecialController@CancelCotizacion')->name('cancelCotizacion');

Route::post('resetPassword','SpecialController@ChangePassword')->name('resetpassword');

Route::get('dashboard','SpecialController@Dashboard')->name('dashboard');

Route::Resource('clientes','ClientesController')->only([
    'store','update','index','create'
]);
//rutas usuarios
Route::Resource('usuarios','UsuariosController')->only([
    'index','store','update','create','destroy','show'
]);

//rutas cotizacion
Route::Resource('cotizacion','CotizacionController')->only([
    'create','show','index','update','edit','destroy'
]);

//rutas eventos
Route::Resource('eventos','EventosController')->only([
    'store','index','update'
]);

//rutas chart 
Route::Resource('chart','ChartController')->only([
    'index'
]);

Route::get('cotizacionGrupos/{id}','SpecialController@CotizacionGrupos')->name('cotizacionGrupos');

Route::get('cotizacionIndividual/{id}','SpecialController@CotizacionIndividual')->name('cotizacionIndividual');


