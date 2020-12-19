@extends('layouts.main')

@section('title')
    MovieLab - Now Playing Movies
@endsection

@section('content')

    {{-- Now Playing Section --}}
    <div class="container mx-auto px-4 pt-16">
        <div class="now-playing-movies">
            <h2 class="uppercase tracking-wider text-yellow-400 text-lg font-semibold">Now Playing Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div>
    </div>
    {{-- End - Now Playing Section --}}

    <div class="page-load-status my-8">
        <div class="flex justify-center">
            <div class="infinite-scroll-request spinner my-8 text-4xl">
                &nbsp;
            </div>
        </div>
        <p class="infinite-scroll-last">End of content</p>

        <div class="flex justify-center">
            <p class="infinite-scroll-error">Error</p>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var elem = document.querySelector('.grid');
        var infScroll = new InfiniteScroll(elem, {
            // options
            path: `/show-all-now-playing-movies/page/\{{#}\}`,
            append: '.movie',
            status: '.page-load-status'
            // history: false,
        });

    </script>
@endsection
