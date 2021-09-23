<?php

use App\Http\Controllers\EspeciesController;
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

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController')->middleware('can:isAdmin');
Route::resource('roles', 'RolesController')->middleware('can:isAdmin');
Route::resource('especie', 'EspecieController')->middleware('especies:isAdmin,isOperativo');
Route::resource('venta', 'VentaController')->middleware('especies:isAdmin,isOperativo');

Route::resource('cobrador', 'CobradorController')->middleware('especies:isAdmin,isOperativo');
// Route::get('especies/{especies}','EspecieController@show')->name('especies.show');

//Route::resource('users', 'UsersController')->middleware('especies:isAdmin,isOperativo');

// Route::resource('zonas', 'ZonasController', ['onlye' =>['index','create','edit','update','store'] ])->middleware('especies:isAdmin,isOperativo');
Route::resource('zonas', 'ZonasController')->middleware('especies:isAdmin,isOperativo');
Route::post('/actualizarzona', 'ZonasController@actualizarzona')->name('actualizarzona');

Route::resource('inventarioZonas', 'InventarioZonaController')->middleware('especies:isAdmin,isOperativo');