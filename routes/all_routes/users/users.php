<?php

use App\Http\Controllers\UserController;
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

Route::get('/users', function () {
    return view('users.index');
})->name('users.index')->middleware(['auth','admin']);

Route::get('/users/create', [UserController::class, 'crearUsuario'])->middleware(['auth','admin'])->name('users.create');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware(['auth', 'admin'])->name('users.edit');
Route::post('/users/store', [UserController::class, 'guardarUsuario'])->middleware(['auth', 'admin'])->name('users.store');
Route::put('/users/{idUser}/update', [UserController::class, 'update'])->middleware(['auth', 'admin'])->name('users.update');
Route::delete('/users/delete/{idUser}', [UserController::class, 'destroy'])->middleware(['auth', 'admin'])->name('users.destroy');