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
Route::get('margen-utilidad', 'tacticosController@margen_utilidad')->name('tactico.margen');
Route::get('v-categoria', 'tacticosController@ventas_categoria')->name('tactico.categoria');
Route::get('rotacion', 'tacticosController@rotacion_inventario')->name('tactico.rotacion');
Route::get('mas-vendidos', 'tacticosController@productos_mas_vendidos')->name('tactico.masvendidos');

//reportes estratégicos - andres
//
//
//
//
