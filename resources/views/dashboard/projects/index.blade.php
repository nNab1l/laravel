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
                    <li>
                    <a href="{{route('about')}}">About</a>
                    </li>
                    <li> <a href="{{route('project.index')}}">projecten</a></li>
                </ul>
            </nav>
        </header>
        <section>
        <a href="{{ route('project.create') }}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">maak</a>
       
        @foreach($projects as $project)
                    <a href="{{ route('project.show', $project) }}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">test</a>
                        @auth
                        <a href="{{ route('project.edit', $project) }}" class="bg-blue hover:bg-green text-white font-bold py-2 px-4 rounded">Bewerk</a>
                        <form action="{{ route('project.destroy', $project) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red hover:bg-orange text-white font-bold py-2 px-4 rounded">Verwijder</button>
            </form>

                        @endauth
                    @endforeach
        {{$projects->links()}}
        
        </section>
        <footer>
            2023 copyright
        </footer>
    </body>
</html>
