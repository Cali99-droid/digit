<?php

use App\Http\Controllers\Ficha_Socioeconomica\FichaController;
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

Route::get('/ficha-socioeconomica', function () {
    return view('ficha.index');
})->name('ficha.index')->middleware(['auth', 'verified', 'digitador_ficha_socioeconomica']);

Route::get('/dashboard', function () {
    return view('ficha.informe');
})->name('ficha.informe')->middleware(['auth', 'digitador_ficha_socioeconomica']);

/** crear ficha */
Route::get('/ficha-socioeconomica/create', function () {
    return view('ficha.create');
})->name('ficha.create')->middleware(['auth', 'verified', 'digitador_ficha_socioeconomica']);

Route::get('/ficha-socioeconomica/editar/{persona}/{ficha}', [FichaController::class, 'editar'])->name('ficha.editar')->middleware(['auth', 'verified', 'digitador_ficha_socioeconomica']);
Route::get('/ficha-socioeconomica/{id}', [FichaController::class, 'mostrarDetalleAlumno'])->middleware(['auth', 'verified', 'digitador_ficha_socioeconomica'])->name('ficha.detalle');

Route::get('/export-excel', [FichaController::class, 'exportarExcel'])->middleware(['auth', 'verified', 'digitador_ficha_socioeconomica'])->name('ficha.exportar.excel');
