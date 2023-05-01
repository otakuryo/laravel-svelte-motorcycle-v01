<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- font awesome -->
        <link rel="stylesheet" href="/fontawesome-6.4.0/css/all.min.css">

        <!-- ViteConfiguration -->
        @vite(['resources/js/appSvelte.js','resources/scss/app.scss'])
        @inertiaHead
        
    </head>
    <body>
        <!-- Vite Configuration -->
        @inertia
    </body>
</html>