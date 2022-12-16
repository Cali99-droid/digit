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
})->name('ficha.index')->middleware('auth');

Route::get('/informe-socioeconomica', function () {
    return view('ficha.informe');
})->name('ficha.informe')->middleware('auth');

/** crear ficha */
Route::get('/ficha-socioeconomica/create', function () {
    return view('ficha.create');
})->name('ficha.create')->middleware('auth');

Route::get('/ficha-socioeconomica/editar/{persona}/{ficha}', [FichaController::class, 'editar'])->name('ficha.editar')->middleware('auth');
Route::get('/ficha-socioeconomica/{id}', [FichaController::class, 'mostrarDetalleAlumno'])->middleware(['auth'])->name('ficha.detalle');
