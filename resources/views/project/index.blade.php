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
        @foreach($projects as $project)
       <div>
        <h2>{{$project->title}}</h2>
        ID: {{$project->id}}
        <em>{{$project->intro}}</em>
       </div>
       @endforeach
       {{$projects->links()}}
    </body>
</html>
