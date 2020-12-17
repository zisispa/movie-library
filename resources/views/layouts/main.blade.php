<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}" class="font-bold">
                        MovieLibraryLaravel
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0"><a href="{{ route('movies.index') }}"
                        class="hover:text-gray-300">Movies</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">TV Shows</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="{{ route('actors.index') }}"
                        class="hover:text-gray-300">Actors</a></li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown />
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    @livewireScripts

    @yield('scripts')
</body>

</html>
