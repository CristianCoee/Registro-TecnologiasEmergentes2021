<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('productos', 'ProductosController@indexprod')->name('productos');
//Route::get('/', [HomeController::class,'indexalumno']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'alumnos.index'])->name('alumnos');
//Route::resource('alumnos', 'AlumnoController');
Route::get('/home', 'HomeController@indexalumno');
