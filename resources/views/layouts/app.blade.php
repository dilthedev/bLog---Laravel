<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','bLog') }}</title>

    <!-- Scripts -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .container{
             margin-top: 5px;
        }

    </style>
</head>
<body>
    <div id="app">

        @include('inc.navbar')

        <div class="container">
                <main class="py-4">
            @include('inc.messages')
            @yield('content')
        </main>
        </div>

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    </div>


    {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> --}}

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
