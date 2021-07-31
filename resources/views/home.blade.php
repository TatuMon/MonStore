<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MonStore</title>

        <script defer src="https://unpkg.com/alpinejs@3.0.1/dist/cdn.min.js"></script>

        <link href="css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <x-header />
        @foreach ($games as $game)
            <div class="game-card">
                <h1 class="game-name">{{ $game->name }}</h1>
                <a href="/games/{{ $game->slug }}"><img src="{{ str_replace('t_thumb', 't_cover_big', $game->cover['url'] ?? null) }}"></a>
                <p>Rating: {{ round($game->total_rating) }}/100</p>
                <a href="/games/{{ $game->slug }}"><i class="fas fa-ellipsis-h"></i></a>
            </div>
            <hr>
        @endforeach
    </body>
</html>
