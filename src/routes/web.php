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


//CRUD usuarios
Route::get('perfil', 'usuarioController@perfil')->name('usuario.perfil');


//reportes tacticos - ever
Route::get('v-periodo', 'tacticosController@ventas_periodo')->name('tactico.periodo');
Route::get('v-categoria', 'tacticosController@ventas_categoria')->name('tactico.categoria');
Route::get('rotacion', 'tacticosController@rotacion_inventario')->name('tactico.rotacion');
Route::get('mas-vendidos', 'tacticosController@productos_mas_vendidos')->name('tactico.masvendidos');

//reportes estratégicos - andres
Route::get('productos_fechaVencimiento', 'estrategicosController@productos_fechaVencimiento')->name('estrategico.fechaVencimiento');
Route::get('productos_estacion', 'estrategicosController@productos_estacion')->name('estrategico.estacion');
Route::get('comparacion_compras', 'estrategicosController@comparacion_compras')->name('estrategico.compras');
Route::get('productos_margenUtilidad', 'estrategicosController@productos_margenUtilidad')->name('estrategico.margenUtilidad');

