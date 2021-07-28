<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MonStore</title>

        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <form method="POST" action="https://id.twitch.tv/oauth2/token?client_id=qn51e547lyyo2n2c6chxiyhaccerzd&client_secret=31i49du7j4n71eyjkrtjyound50bmf&grant_type=client_credentials">
            <input type="submit" value="post"/>
        </form>
    </body>
</html>
