<?php

namespace App\Http\Controllers;

use App\ViewModels\PopularMoviesViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PopularMoviesController extends Controller
{
    public function index($page = 1)
    {

        abort_if($page > 500, 204);

        $popularMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/popular?page=' . $page)->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $viewModel = new PopularMoviesViewModel(
            $popularMovies,
            $genres
        );

        return view('movies.popular-movies', $viewModel);
    }
}
