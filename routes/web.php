<?php



use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\periodoController;

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
//Route::get('/alumnos', 'HomeController@indexalumno')->name('alumnos');
//Route::get('/alumnos', 'AlumnoController@index')->name('alumnos');
//Route::get('/alumnos', [App\Http\Controllers\AlumnosController::class, 'index'])->name('alumnos');
//Route::get('/', [HomeController::class,'indexalumnos']);
//Route::get('/home', [App\Http\Controllers\HomeController::indexalumno(), 'Alumnos.index'])->name('Alumnos');
//Route::resource('alumnos', 'AlumnoController');
//Route::get('/periodo', [App\Http\Controllers\periodoController::class, 'index'])->name('periodo');
Route::get('/alumnos', 'AlumnoController@index');
Route::resource('alumnos', 'AlumnoController');
Route::get('/periodo', 'periodoController@index');
Route::resource('periodo', 'periodoController');

