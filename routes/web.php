<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ListadoController;

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

Route::get('/', [PersonasController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/registro/inscripcion', [PersonasController::class, 'info'])->name('datos');
Route::get('/registro/inscripcion/descargar', [PersonasController::class, 'exportExcel'])->name('descarga');
Route::get('/registro/inscripcion/recordar', [PersonasController::class, 'recordarevento'])->name('recordar');

Route::post('/reporte/registro/usuarios', [ListadoController::class, 'listado'])->name('reporusu');

Route::post('/grupos', [ListadoController::class, 'regisgrup'])->name('grupos');

Route::post('/roles', [ListadoController::class, 'rolesgrup'])->name('roles'); 

Route::get('/vincular', [ListadoController::class, 'elegir'])->name('vincular');

Route::get('/cambiar/estado/{id}', [ListadoController::class, 'cambiar']);
Route::get('/cambiar/estado/rol/{id}', [ListadoController::class, 'cambiarrol']);

Route::get('/eliminar/grupo/{id}', [ListadoController::class, 'eliminargrupo']);
Route::get('/eliminar/rol/{id}', [ListadoController::class, 'eliminarrol']);

require __DIR__.'/auth.php';
