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
</head>

<body>
    <div id="app">
        {{-- HEADER --}}
        @if (isset(Auth::user()->id))
            @include('layouts.header2')
        @else
            @include('layouts.header')
        @endif

        {{-- NAVBAR --}}
        @if (isset(Auth::user()->id))
            @if (Auth::user()->role_id == '2')
                @include('layouts.navbar-user')
            @elseif(Auth::user()->role_id == '1')
                @include('layouts.navbar-admin')
            @endif
        @endif

        {{-- CONTENT --}}
        <main class="py-4">
            @yield('content')
        </main>

        {{-- FOOTER --}}
        @include('layouts.footer')

    </div>
</body>

</html>
