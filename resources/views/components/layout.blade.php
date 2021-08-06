<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ $title }}</title>

        <script defer src="https://unpkg.com/alpinejs@3.0.1/dist/cdn.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <x-header />
        <div id="nav-container">
            <nav>
                <a href="/games">
                    <i class="fas fa-gamepad"></i>
                    Games
                </a>
                <a href="/collections">
                    <i class="fas fa-layer-group"></i>
                    Collections
                </a>
                <a href="/info">
                    <i class="fas fa-info"></i>
                    Info
                </a>
                <a href="https://github.com/TatuMon/MonStore.git" id="github" target="_blank">
                    <i class="fab fa-github"></i>
                    Repo
                </a>
            </nav>
    
        </div>
        <div id="main">
            {{ $slot }}
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>