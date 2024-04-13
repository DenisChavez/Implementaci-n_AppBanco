<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\RetiroController;
use App\Http\Controllers\DepositoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('layouts.principal');
});



Route::resource("/empleado", "App\Http\Controllers\EmpleadoController");
Route::resource("/afiliado", "App\Http\Controllers\AfiliadoController");
Route::resource("/retiro", "App\Http\Controllers\RetiroController");
Route::resource('/deposito', "App\Http\Controllers\DepositoController");

//Rutas empleados
Route::get("/empleado/delete/{id}", 'App\Http\Controllers\EmpleadoController@show');
Route::get('/empleado/{id}/edit', 'App\Http\Controllers\EmpleadoController@edit')->name('empleado.edit');
Route::get('/empleado/{id}/update', 'App\Http\Controllers\EmpleadoController@update')->name('empleado.update');
Route::delete('/empleado/{id}/eliminar', 'App\Http\Controllers\EmpleadoController@destroy')->name('empleado.destroy');

//Rutas afiliado
Route::get('/afiliado/update/{id}', 'App\Http\Controllers\AfiliadoController@update')->name('afiliado.update');
Route::get('/afiliado/edit/{id}', 'App\Http\Controllers\AfiliadoController@edit');
Route::get('/afiliado/destroy/{id}', 'App\Http\Controllers\AfiliadoController@destroy');

//Ruta especial enviando dos variables al metodo show de Retiro
Route::get('/retiro/{id}/{id2}', [RetiroController::class,'show']);
Route::get('/retiro/create/{id}/{id2}' , [RetiroController::class, 'create']);
Route::get('/retiro/store/{id}/{id2}', [RetiroController::class, 'store']);

//Ruta especial enviando dos variables al metodo show de Deposito
Route::get('/deposito/{id}/{id2}', [DepositoController::class, 'show']);
Route::get('/deposito/create/{id}/{id2}', [DepositoController::class, 'create']);
Route::get('/deposito/store/{id}/{id2}', [DepositoController::class, 'store']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
