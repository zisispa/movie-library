@extends('layouts.main')

@section('content')

    {{-- Popular TV Shows Sesction --}}

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-400 text-lg font-semibold">Popular TV Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($popularTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach

            </div>
        </div>
        {{-- End - Popular TV Shows Sesction --}}

        {{-- Top Rated TV Shows Section --}}

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-yellow-400 text-lg font-semibold">Top Rated TV Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($topRatedTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach
            </div>
        </div>

        {{-- End - Top Rated TV Shows Section --}}
    </div>
@endsection
