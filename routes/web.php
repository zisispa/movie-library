<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\NowPlayingMovies;
use App\Http\Controllers\NowPlayingMoviesController;
use App\Http\Controllers\PopularMovies;
use App\Http\Controllers\PopularMoviesController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{id}', [TvController::class, 'show'])->name('tv.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page?}', [ActorsController::class, 'index']);
Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');

Route::get('/show-all-popular-movies', [PopularMoviesController::class, 'index'])->name('show-all-popular-movies.index');
Route::get('/show-all-popular-movies/page/{page?}', [PopularMoviesController::class, 'index']);

Route::get('/show-all-now-playing-movies', [NowPlayingMoviesController::class, 'index'])->name('show-all-now-playing-movies.index');
Route::get('/show-all-now-playing-movies/page/{page?}', [NowPlayingMoviesController::class, 'index']);
