<?php

namespace App\Http\Controllers;

use App\ViewModels\NowPlayingViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NowPlayingMoviesController extends Controller
{
    public function index($page = 1)
    {
        abort_if($page > 500, 204);

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/now_playing?page=' . $page)->json()['results'];
        $genres = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $viewModel = new NowPlayingViewModel(
            $nowPlayingMovies,
            $genres
        );

        return view('movies.now-playing-movies', $viewModel);
    }
}
