<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

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
    //return view('email.nuevo-usuario');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/registro/inscripcion', [PersonasController::class, 'info'])->name('datos');
Route::get('/registro/inscripcion/descargar', [PersonasController::class, 'exportExcel'])->name('descarga');
Route::get('/registro/inscripcion/recordar', [PersonasController::class, 'recordarevento'])->name('recordar');

require __DIR__.'/auth.php';
