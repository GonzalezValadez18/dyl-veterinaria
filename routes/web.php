<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

//Route::get('/',[Users::class, 'index'])->name('index');
Route::get('/', [InicioController::class, 'index'])->name('index');

Route::get('/vacunacion', [ServicesController::class, 'vacunacion'])->name('vacunacion');
Route::get('/desparasitacion', [ServicesController::class, 'desparasitacion'])->name('desparasitacion');
Route::get('/estetica', [ServicesController::class, 'estetica'])->name('estetica');
Route::get('/consulta', [ServicesController::class, 'consulta'])->name('consulta');


/*Route::get('/create',[Users::class, 'create'])->name('create');
Route::post('/store', [Users::class, 'store'])->name('store');
Route::get('/show/{id}',[Users::class, 'show'])->name('show');
Route::get('/edit/{id}',[Users::class, 'edit'])->name('edit');
Route::put('/update/{id}',[Users::class, 'update'])->name('update');
Route::delete('/destroy/{id}',[Users::class, 'destroy'])->name('destroy');
*/

