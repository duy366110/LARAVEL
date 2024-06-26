<!DOCTYPE html>
<html amp lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Link styles -->
        <link rel="stylesheet" href="{{asset("assets/css/commons/common-header.css")}}">

        <!-- Styles -->
        <style amp-custom></style>

        <!-- AMP styles and boilerplate code -->
        <style amp-boilerplate>
            body {
                -webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
                -moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
                -ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
                animation:-amp-start 8s steps(1,end) 0s 1 normal both
            }
            @-webkit-keyframes -amp-start {
                from { visibility:hidden }
                to { visibility:visible }
            }
            @-moz-keyframes -amp-start {
                from { visibility:hidden }
                to { visibility:visible }
            }
            @-ms-keyframes -amp-start {
                from { visibility:hidden }
                to { visibility:visible }
            }
            @-o-keyframes -amp-start {
                from { visibility:hidden }
                to { visibility:visible }
            }
            @keyframes -amp-start {
                from { visibility:hidden }
                to { visibility:visible }
            }
        </style>
        <noscript>
            <style amp-boilerplate>
                body {
                    -webkit-animation:none;
                    -moz-animation:none;
                    -ms-animation:none;
                    animation:none
                }
            </style>
        </noscript>
    </head>
    <body class="amp-body-container">
        <div class="container-none">
            @include('commons.common-header')
            @yield('content')
        </div>
    </body>
</html>
