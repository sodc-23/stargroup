<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'StarGroup') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Anton|Roboto" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light hide-top-var">
    <div id="app">
        @include('shared/navbar')

      
        @yield('content')
      
        @include('shared/footer')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('/js/main.js') }}"></script>
    @stack('inline-scripts')
</body>
</html>
