<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">



        <link rel="stylesheet" href="{{asset('sass/app.scss')}}">

    </head>
    <body>
        <div id="root"> </div>


        <script src="{{asset('js/app.js')}}"></script>

    </body>

</html>
