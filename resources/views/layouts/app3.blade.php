<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title> <!-- Custom CSS --> @section('styles_laravel')
    <!-- Bootstrap Core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}"> <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> @show @yield('mis_estilos')

    <style>
        body {
            width: 100%;
            height: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)),
            url("{{ URL::asset('assets/Imagenes/diseño_prototipos/fondo.jpg') }}");
            background-size: cover;

        }
    </style>
</head>
</head>

<BODY>

    @yield('content')

    <script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/mdb.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>

</BODY>

</HTML>