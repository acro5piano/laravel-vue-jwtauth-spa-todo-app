<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue TODO</title>

        <!-- TODO: アセットちゃんとやる -->
        @if (env('APP_ENV') === 'production')
            <link rel="stylesheet" href="dist/css/app.css">
        @else
            <link rel="stylesheet" href="css/app.css">
        @endif

        <script>
            window.Laravel = {};
            window.Laravel.csrfToken = "{{ csrf_token() }}";
        </script>
    </head>
    <body>
        <div id="app">
        </div>
    </body>

    <!-- TODO: アセットちゃんとやる -->
    @if (env('APP_ENV') === 'production')
        <script src="dist/js/app.js"></script>
    @else
        <script src="js/app.js"></script>
    @endif
</html>
