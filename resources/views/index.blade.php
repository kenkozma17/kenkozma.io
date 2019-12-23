<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ken Kozma | Web Developer</title>

        <? # CSS Bundle ?>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        <? # Jquery ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="app">
            <navigation></navigation>
            
            <div class="grid row">
                <div class="col-6"></div>
                <div class="col-6">
                    <img src="/images/Ken.jpg" alt="">
                </div>
            </div>
        </div>

        <? # JavaScript Bundle ?>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
