<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @livewireStyles

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @yield('content');
        </div>

        @livewireScripts
    </body>
</html>
