<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME', 'Aprender Laravel')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    </head>
    <body>
        @include('inc.navbar')
        <div class="container starter-template">
            @include('inc.message')
            @yield('content')
        </div>
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace( 'summary-ckeditor' );
        </script>
    </body>
</html>
