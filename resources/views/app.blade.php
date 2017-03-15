<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- TODO: アセットちゃんとやる -->
        @if (env('APP_ENV') === 'production')
            <link rel="stylesheet" href="dist/css/app.css"></script>
        @else
            <link rel="stylesheet" href="css/app.css"></script>
        @endif

        <script>
            window.Laravel = {};
            window.Laravel.csrfToken = "{{ csrf_token() }}";
        </script>
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <div class="container">
                <router-view></router-view>
            </div>
            <hr>
            <div class="container-fluid">
                <a href="https://github.com/acro5piano/laravel-vue-jwtauth-spa-todo-app" target="_blank">
                    <img src="https://image.flaticon.com/icons/svg/25/25231.svg" width="30" height="20">
                </a>
            </div>
        </div>
    </body>

    <!-- TODO: アセットちゃんとやる -->
    @if (env('APP_ENV') === 'production')
        <script src="dist/js/app.js"></script>
    @else
        <script src="js/app.js"></script>
    @endif
</html>
