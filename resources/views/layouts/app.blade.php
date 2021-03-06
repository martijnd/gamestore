<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <div class="bg-gray-200 min-h-screen" id="app">
        <nav class="p-4 shadow-lg bg-blue-500 flex justify-between">
            <a class="font-bold text-white italic" href="{{ route('home') }}">{{ config('app.name') }}</a>
        </nav>

        <main class="container mx-auto py-8">
            @yield('content')
        </main>

        @livewireScripts
    </div>
</body>
</html>
