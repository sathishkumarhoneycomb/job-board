<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
         {{-- @vite('resources/css/app.css') --}}
           @vite('resources/css/app.css')
    </head>
    <body class="mx-auto mt-12 max-w-3xl text-slate-700 bg-slate-200">

            {{ $slot }}
    </body>
</html>
