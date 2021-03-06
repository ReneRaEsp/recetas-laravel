<?php

use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('/', function () {
  return view('welcome');
});*/

Route::redirect('/', '/recetas');

Route::get('/recetas', [RecetaController::class, 'index'])->name('recetas.index');

Route::get('/recetas/create', [RecetaController::class, 'create'])->name('recetas.create');

Route::post('/recetas', [RecetaController::class, 'store'])->name('recetas.store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
