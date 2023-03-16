<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VestuariosController;

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
Route::get('/vestuarios', [VestuariosController::class, 'index'])->name('vestuarios.index');

Route::get('/vestuarios/create', [VestuariosController::class, 'create'])->name('vestuarios.create');

Route::get('/vestuarios/{id}', [VestuariosController::class, 'show'])->name('vestuarios.show');

Route::get('/vestuarios/{id}/edit', [VestuariosController::class, 'edit'])->name('vestuarios.edit');

Route::post('/vestuarios', [VestuariosController::class, 'store'])->name('vestuarios.store');

Route::put('/vestuarios/{id}', [VestuariosController::class, 'update'])->name('vestuarios.update');

Route::delete('/vestuarios/{id}', [VestuariosController::class, 'destroy'])->name('vestuarios.destroy');
