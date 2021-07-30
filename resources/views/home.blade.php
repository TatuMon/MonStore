<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MonStore</title>

        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <form method="POST" action="games">
            @csrf
            <input type="submit" value="post"/>
        </form>
    </body>
</html>
