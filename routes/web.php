<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FilmController;


Route::get('/', [FilmController::class, 'index'])->name('film.index');
Route::get('/film/{id}', [FilmController::class, 'show'])->name('film.show');
