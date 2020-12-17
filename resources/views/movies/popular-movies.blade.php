@extends('layouts.main')

@section('content')

    {{-- Popular Movies Sesction --}}
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-400 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach

            </div>
        </div>
        {{-- End - Popular Movies Sesction --}}
    </div>

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
            path: `/show-all-popular-movies/page/\{{#}\}`,
            append: '.movie',
            status: '.page-load-status'
            // history: false,
        });

    </script>
@endsection
