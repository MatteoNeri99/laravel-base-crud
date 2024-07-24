<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/animals', [AnimalController::class , 'index'])->name('animal.index');

Route::post('/animals', [AnimalController::class , 'store'])->name('animal.store');

Route::get('/animal/create', [AnimalController::class , 'create'])->name('animal.create');

Route::get('/animal/{animal}/edit', [AnimalController::class , 'edit'])->name('animal.edit');

Route::get('/show/{id}', [AnimalController::class , 'show'])->name('animal.show');

Route::put('/animal/{animal}', [AnimalController::class , 'update'])->name('animal.update');




