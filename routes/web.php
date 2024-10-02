<?php


use App\Http\Controllers\ComunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/comunas',[ComunaController::class, 'index'])->name('comunas.index');
route::post('/comunas',[ComunaController::class, 'store'])->name('comunas.store');