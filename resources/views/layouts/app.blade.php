<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Larashop') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        @include('includes.nav')
        @if(session('message'))
            <div class="notification danger">
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            </div>
        @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
