<!doctype html>
<html class="overflow-y-scroll" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
<div class="min-h-screen" id="app">
    <nav class="py-4 px-6 flex justify-between text-purple-500 shadow">
        <a class="text-xl font-bold" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <div class="links text-xl font-semibold italic ml-8">
            <a href="{{route('games.index')}}">Games</a>
        </div>
        <div class="auth mt-2">
            @auth
                <form action="{{route('logout')}}" method="post">
                    <button class="px-4 py-2 bg-purple-500 text-white font-semibold rounded" type="submit">Sign out
                    </button>
                </form>
            @elseguest
                <a class="px-4 py-2 text-purple-500 border border-purple-500 mr-2 hover:bg-purple-100 font-semibold rounded"
                   href="{{route('login')}}">Log in</a>
                <a class="px-4 py-2 bg-purple-500 text-white font-semibold rounded" href="{{route('register')}}">Register</a>
            @endauth
        </div>
    </nav>

    <main class="container mx-auto py-8">
        {{ $slot }}
    </main>

    @livewireScripts
</div>
</body>
</html>
