<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes(['register' => false]);


//inicio
Route::get('inicio', 'HomeController@admin')->name('inicio.admin');
Route::get('/', 'Auth\LoginController@showLoginForm')->name('inicio');
Route::get('/registrar', 'usuarioController@registrar')->name('registrar');


//ETL
Route::get('etl', 'ETLController@etl')->name('etl.index');
Route::get('bd', 'usuarioController@bd')->name('bd');

//CRUD usuarios
Route::get('perfil', 'usuarioController@perfil')->name('usuario.perfil');
Route::get('usuario', 'usuarioController@lista')->name('usuario.lista');
Route::get('bitacora', 'usuarioController@bitacora')->name('usuario.bitacora');


//reportes tacticos - ever
Route::get('f-v-periodo', 'tacticosController@form_ventas_periodo')->name('form.periodo');
Route::get('f-v-categoria', 'tacticosController@form_ventas_categoria')->name('form.categoria');
Route::get('f-rotacion', 'tacticosController@form_rotacion_inventario')->name('form.rotacion');
Route::get('f-mas-vendidos', 'tacticosController@form_productos_mas_vendidos')->name('form.masvendidos');

Route::get('v-periodo', 'tacticosController@ventas_periodo')->name('tactico.periodo');
Route::get('v-categoria', 'tacticosController@ventas_categoria')->name('tactico.categoria');
Route::get('rotacion', 'tacticosController@rotacion_inventario')->name('tactico.rotacion');
Route::get('mas-vendidos', 'tacticosController@productos_mas_vendidos')->name('tactico.masvendidos');

//reportes estratégicos - andres
Route::get('f-productos_fechaVencimiento', 'estrategicosController@form_productos_fechaVencimiento')->name('form.fechaVencimiento');
Route::get('f-productos_estacion', 'estrategicosController@form_productos_estacion')->name('form.estacion');
Route::get('f-comparacion_compras', 'estrategicosController@form_comparacion_compras')->name('form.compras');
Route::get('f-productos_margenUtilidad', 'estrategicosController@form_productos_margenUtilidad')->name('form.margenUtilidad');

Route::get('productos_fechaVencimiento', 'estrategicosController@productos_fechaVencimiento')->name('estrategico.fechaVencimiento');
Route::get('productos_estacion', 'estrategicosController@productos_estacion')->name('estrategico.estacion');
Route::get('comparacion_compras', 'estrategicosController@comparacion_compras')->name('estrategico.compras');
Route::get('productos_margenUtilidad', 'estrategicosController@productos_margenUtilidad')->name('estrategico.margenUtilidad');

