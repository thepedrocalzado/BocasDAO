<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


        <title>BocasDAO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <style type="text/css">
        @font-face {
            font-family: font-bold;
            src: url('{{ asset('/fonts/negrita.otf') }}');
        }

        @font-face {
            font-family:  font-light;
            src: url('{{ asset('/fonts/light.otf') }}');
        }
    </style>

    <body class="bg-darkblue">
    @extends('components/footer')
    @extends('components/passport')

    @extends('components/content')

    @extends('components/toprefugio')
        @extends('components/topsection')
        @extends('components/navbar')


    </body>
</html>
