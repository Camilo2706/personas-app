<?php

use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ComunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/comunas',[ComunaController::class, 'index'])->name('comuna.index');
route::post('/comunas',[ComunaController::class, 'store'])->name('comunas.store');
route::get('/comunas/create',[ComunaController::class,'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}',[ComunaController::class,'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}',[ComunaController::class,'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit',[ComunaController::class,'edit'])->name('comunas.edit');
//RUTAS PARA MUNICIPIO
Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios.index');
Route::post('/municipios', [MunicipioController::class, 'store'])->name('municipios.store');
Route::get('/municipios/create', [MunicipioController::class, 'create'])->name('municipios.create');
Route::delete('/municipios/{municipio}', [MunicipioController::class, 'destroy'])->name('municipios.destroy');
Route::put('/municipios/{municipio}', [MunicipioController::class, 'update'])->name('municipios.update');
Route::get('/municipios/{municipio}/edit', [MunicipioController::class, 'edit'])->name('municipios.edit');
//RUTAS PARA DEPARTAMENTO