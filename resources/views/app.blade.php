<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Emergency Response System</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
{{--     <script src="{{asset('js/main.js')}}"></script> --}}
    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -34.397, lng: 150.644},
              zoom: 8
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC9hn5NvslOVk2saAuyT4ZV0bjS3LHemA&callback=initMap"
    async defer></script>
</html>
