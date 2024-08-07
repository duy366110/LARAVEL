<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script async src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/cf41fb98a5.js" crossorigin="anonymous"></script>
        <title>Laravel</title>

        <!-- Link styles -->
        <link rel="stylesheet" href="{{asset("assets/css/styles.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/commons/common-header.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/commons/common-footer.css")}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />

        
    </head>
    <body class="common-body-container">
        @include('commons.common-header')

        <div class="container-none">
            @yield('content')
        </div>

        @yield('footer')
        @yield('custom-js')
    </body>
</html>
