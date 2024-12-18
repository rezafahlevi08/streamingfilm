<?php

use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/categories', [FilmApiController::class, 'getCategories']);
Route::get('/films', [FilmApiController::class, 'getFilms']);
Route::get('/films/{id}', [FilmApiController::class, 'getFilmDetails']);
