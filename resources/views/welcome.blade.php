<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="/dist/app.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <header class="header">
            <nav>
                <ul>
                    <li>Home</li>
                    <li>Projecten</li>
                    <li>
                    <a href="{ {route('about')}}">About</a>
                    </li>
                    <li> <a href="{{route('model.show', $model)}}">Bekijk dit item</a></li>
                </ul>
            </nav>
        </header>
        <section></section>
        <footer>
            2023 copyright
        </footer>
    </body>
</html>
