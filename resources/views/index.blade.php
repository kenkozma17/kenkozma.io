<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ken Kozma | Web Artist</title>

        <? # CSS Bundle ?>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        <? # Jquery ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <? # Lity ?>
        <link href="{{ mix('/css/lity.css') }}" rel="stylesheet">

        <? # Fonts ?>
        <link rel="stylesheet" href="https://use.typekit.net/kyv3ntu.css">
    </head>
    <body>

        <div id="app" class="main">
            <navigation></navigation>
            <frontpage></frontpage>
            <about></about>
            <work></work>
            <contact-form></contact-form>
        </div>


        <? # JavaScript Bundle ?>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
