<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/guille', function () {
    return ('Hola guille');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('empleado', 'App\Http\Controllers\EmpleadoController');
Route::resource('dependiente', 'App\Http\Controllers\DependienteController');
Route::get('/reporte', [App\Http\Controllers\ReporteController::class, 'reporte1'])->name('reporte1');
Route::get('/reportex', [App\Http\Controllers\ReportexController::class, 'reportex'])->name('reportex');