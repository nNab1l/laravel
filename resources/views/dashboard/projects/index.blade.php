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
                    @foreach($items as $item)
                        <a href="{{$item->title}}">{{ $item->title }}</a><br>
                    @endforeach
                    {{$items->links()}}
                    
                    @auth
                        <a href="{{ route('ROUTE-NAAR-CREATE') }}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">Nieuw Project</a>
                    @endauth


                </ul>
            </nav>
        </header>
        <section></section>
        <footer>
            2023 copyright
        </footer>
    </body>
</html>
